<?php


namespace App\Allegro\Model\Request\AllegroPrices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutAllegroPricesOfferConsentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri(sprintf('/sale/allegro-prices-offer-consents/%s', $offerId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
