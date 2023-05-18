<?php


namespace App\Allegro\Model\Request\OfferRating;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferRatingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offers/{$offerId}/rating"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
