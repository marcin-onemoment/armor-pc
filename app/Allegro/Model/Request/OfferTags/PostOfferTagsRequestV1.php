<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:53
 */

namespace App\Allegro\Model\Request\OfferTags;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostOfferTagsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri("/sale/offers/{$offerId}/tags"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
