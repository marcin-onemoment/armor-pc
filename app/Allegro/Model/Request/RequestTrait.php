<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 16:55
 */

namespace App\Allegro\Model\Request;

use DateTime;
use DateTimeZone;
use GuzzleHttp\Psr7\Uri;
use App\Allegro\Constants\EndpointHost;
use Psr\Http\Message\UriInterface;
use GuzzleHttp\Psr7\Query;

trait RequestTrait
{
    private function prepareHeaders(
        $token,
        string $contentType,
        ?string $accept = null,
        ?string $acceptLanguage = null
    ): array {
        return [
            "Authorization" => "Bearer {$token}",
            "Accept" => $accept ?: $contentType,
            "Content-Type" => $contentType,
            "Accept-Language" => $acceptLanguage ?: "pl-PL",
        ];
    }

    private function prepareUri(
        string $host,
        string $path,
        array|string|null $query = []
    ): UriInterface {
        $uri = new Uri("https://{$host}");
        $uri = $uri->withPath($path);

        if (!empty($query)) {
            $query = Query::build($query);
        }

        return !empty($query) ? $uri->withQuery($query) : $uri;
    }

    private function prepareApiUri(
        string $path,
        array|string|null $query = null
    ): UriInterface {
        return $this->prepareUri(EndpointHost::API, $path, $query);
    }

    private function prepareUploadUri(
        string $path,
        array|string|null $query = null
    ): UriInterface {
        return $this->prepareUri(EndpointHost::UPLOAD, $path, $query);
    }

    private function dateTimeFormat(?DateTime $dateTime): ?string
    {
        if (!$dateTime) {
            return null;
        }

        $dateTime->setTimezone(new DateTimeZone("UTC"));

        return $dateTime->format("Y-m-d\TH:i:s.v\Z");
    }
}
