<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:50
 */

namespace App\Allegro\Model\Request\OfferTags;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;

class GetTagsRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-tags', [
                'user.id' => $token->claims()->get('user_name'),
                'limit' => $limit,
                'offset' => $offset,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
