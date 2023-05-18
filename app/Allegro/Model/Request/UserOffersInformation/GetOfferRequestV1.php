<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:37
 */

namespace App\Allegro\Model\Request\UserOffersInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offers/{$offerId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
