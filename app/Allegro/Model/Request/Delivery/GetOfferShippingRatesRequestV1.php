<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:47
 */

namespace App\Allegro\Model\Request\Delivery;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferShippingRatesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offers/{$offerId}/shipping-rates"),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
