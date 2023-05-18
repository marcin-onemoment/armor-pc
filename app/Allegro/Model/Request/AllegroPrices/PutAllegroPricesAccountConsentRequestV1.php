<?php


namespace App\Allegro\Model\Request\AllegroPrices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutAllegroPricesAccountConsentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri('/sale/allegro-prices-account-consent'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
