<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:23
 */

namespace App\Allegro\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferVariantRequestV1 extends Request
{
     use RequestTrait;

     public function __construct($token, string $setId)
     {
         parent::__construct(
             'GET',
             $this->prepareApiUri("/sale/offer-variants/{$setId}"),
             $this->prepareHeaders($token, ContentType::PUBLIC_V1)
         );
     }
}
