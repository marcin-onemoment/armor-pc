<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 10:51
 */

namespace App\Allegro;


use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Http\Adapter\Guzzle7\Client;
use App\Allegro\Constants\EndpointHost;
use App\Allegro\Constants\GrantType;
use App\Allegro\Helper\LogFactory;
use App\Allegro\Helper\SandboxUri;
use App\Allegro\Helper\SoapLogFactory;
use App\Allegro\Helper\SoapService;
use App\Allegro\Helper\TokenBundleFactory;
use App\Allegro\Model\Auth\TokenBundleInterface;
use App\Allegro\Model\Credentials\AppCredentialsInterface;
use App\Allegro\Model\SoapWsdl\DoLoginWithAccessTokenRequest;
use App\Allegro\Model\SoapWsdl\doLoginWithAccessTokenResponse;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\UriInterface;
use Psr\Log\LoggerInterface;
use SoapFault;
use GuzzleHttp\Psr7\Query;

/**
 * Class AllegroAuth
 * @package Imper86\AllegroRestApiSdk
 */
class AllegroAuth implements AllegroAuthInterface
{
    /**
     * @var AppCredentialsInterface
     */
    private $credentials;
    /**
     * @var LoggerInterface|null
     */
    private $logger;
    /**
     * @var ClientInterface|null
     */
    private $httpClient;

    public function __construct(
        AppCredentialsInterface $credentials,
        ?LoggerInterface $logger = null,
        ?ClientInterface $httpClient = null
    )
    {
        $this->credentials = $credentials;
        $this->logger = $logger;
        $this->httpClient = $httpClient ?? Client::createWithConfig([]);
    }

    /**
     * {@inheritDoc}
     */
    public function createAuthUrl(?string $state = null, bool $prompt = true, ?array $scope = null): string
    {
        $host = EndpointHost::OAUTH;
        $query = [
            'response_type' => 'code',
            'client_id' => $this->credentials->getClientId(),
            'redirect_uri' => $this->credentials->getRedirectUri(),
        ];

        if ($state) {
            $query['state'] = $state;
        }

        if ($prompt) {
            $query['prompt'] = 'confirm';
        }

        if ($scope) {
            $query['scope'] = implode(' ', $scope);
        }

        $query = Query::build($query);

        $uri = (new Uri("https://{$host}/auth/oauth/authorize"))
            ->withQuery($query);

        return (string)($this->credentials->isSandbox() ? SandboxUri::prep($uri) : $uri);
    }

    /**
     * {@inheritDoc}
     */
    public function createDeviceAuthorization(): array
    {
        $query = Query::build([
            'client_id' => $this->credentials->getClientId(),
        ]);

        $request = new Request('POST', $this->prepareDeviceUri($query), $this->prepareHeaders([
            'Content-Type' => "application/x-www-form-urlencoded",
        ]));
        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, [], $request, $response);

        if ($response->getStatusCode() >= 400) {
            throw new BadResponseException("Bad response", $request, $response);
        }

        return json_decode($response->getBody()->__toString(), true);
    }

    /**
     * {@inheritDoc}
     */
    public function fetchTokenFromCode(string $code, array $logContext = []): TokenBundleInterface
    {
        $query = Query::build([
            'grant_type' => GrantType::AUTHORIZATION_CODE,
            'code' => $code,
            'redirect_uri' => $this->credentials->getRedirectUri(),
        ]);

        $request = new Request('POST', $this->prepareTokenUri($query), $this->prepareHeaders());
        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, $logContext, $request, $response);

        if ($response->getStatusCode() >= 400) {
            throw new BadResponseException("Bad response", $request, $response);
        }

        return TokenBundleFactory::buildFromResponse($response, GrantType::AUTHORIZATION_CODE);
    }

    /**
     * {@inheritDoc}
     */
    public function fetchTokenFromDeviceCode(string $deviceCode, array $logContext = []): TokenBundleInterface
    {
        $query = Query::build([
            'grant_type' => GrantType::DEVICE_CODE,
            'device_code' => $deviceCode,
        ]);

        $request = new Request('POST', $this->prepareTokenUri($query), $this->prepareHeaders([
            'Content-Type' => "application/x-www-form-urlencoded",
        ]));
        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, $logContext, $request, $response);

        if ($response->getStatusCode() >= 400) {
            throw new BadResponseException("Bad response", $request, $response);
        }

        return TokenBundleFactory::buildFromResponse($response);
    }

    /**
     * {@inheritDoc}
     */
    public function fetchTokenFromRefresh($refreshToken, array $logContext = []): TokenBundleInterface
    {
        $query = Query::build([
            'grant_type' => GrantType::REFRESH_TOKEN,
            'refresh_token' => (string)$refreshToken,
            'redirect_uri' => $this->credentials->getRedirectUri(),
        ]);

        $request = new Request('POST', $this->prepareTokenUri($query), $this->prepareHeaders());
        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, $logContext, $request, $response);

        if ($response->getStatusCode() >= 400) {
            throw new BadResponseException("Bad response", $request, $response);
        }

        return TokenBundleFactory::buildFromResponse($response, GrantType::REFRESH_TOKEN);
    }

    /**
     * {@inheritDoc}
     */
    public function fetchSoapSessionId($accessToken, array $logContext = []): doLoginWithAccessTokenResponse
    {
        $service = SoapService::get($this->credentials->isSandbox());

        try {
            $response = $service->doLoginWithAccessToken(
                new DoLoginWithAccessTokenRequest((string)$accessToken, 1, $this->credentials->getClientId())
            );

            SoapLogFactory::log($this->logger, $service, null, $logContext);

            return $response;
        } catch (SoapFault $exception) {
            SoapLogFactory::log($this->logger, $service, $exception, $logContext);

            throw $exception;
        }
    }

    public function fetchTokenFromClientCredentials(array $logContext = []): TokenBundleInterface
    {
        $query = Query::build(['grant_type' => GrantType::CLIENT_CREDENTIALS]);
        $request = new Request('POST', $this->prepareTokenUri($query), $this->prepareHeaders());
        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, $logContext, $request, $response);

        if ($response->getStatusCode() >= 400) {
            throw new BadResponseException("Bad response", $request, $response);
        }

        return TokenBundleFactory::buildFromResponse($response, GrantType::CLIENT_CREDENTIALS);
    }

    /**
     * @param string $query
     * @return UriInterface
     */
    private function prepareTokenUri(string $query): UriInterface
    {
        $host = EndpointHost::OAUTH;
        $uri = new Uri("https://{$host}/auth/oauth/token?{$query}");

        return $this->credentials->isSandbox() ? SandboxUri::prep($uri) : $uri;
    }

    /**
     * @param string $query
     * @return UriInterface
     */
    private function prepareDeviceUri(string $query): UriInterface
    {
        $host = EndpointHost::OAUTH;
        $uri = new Uri("https://{$host}/auth/oauth/device?{$query}");

        return $this->credentials->isSandbox() ? SandboxUri::prep($uri) : $uri;
    }

    /**
     * @param array $extraHeaders
     * @return array
     */
    private function prepareHeaders(array $extraHeaders = []): array
    {
        $basicAuthString = base64_encode("{$this->credentials->getClientId()}:{$this->credentials->getClientSecret()}");

        return array_merge([
            'Authorization' => "Basic {$basicAuthString}",
        ], $extraHeaders);
    }
}
