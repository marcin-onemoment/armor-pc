<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:21
 */

namespace App\Allegro\Model\Request\Classifieds;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferClassifiedsPackagesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offer-classifieds-packages/{$offerId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
