<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:51
 */

namespace App\Allegro\Model\Request\OfferTags;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutTagRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $tagId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/offer-tags/{$tagId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
