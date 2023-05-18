<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:21
 */

namespace App\Allegro\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutOfferVariantRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $setId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/offer-variants/{$setId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
