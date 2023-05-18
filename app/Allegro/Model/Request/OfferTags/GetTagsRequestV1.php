<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:49
 */

namespace App\Allegro\Model\Request\OfferTags;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetTagsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-tags', [
                'user.id' => $userId,
                'limit' => $limit,
                'offset' => $offset,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
