<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:02
 */

namespace App\Allegro\Model\Request\AdditionalServices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetAdditionalServiceGroupsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId, ?int $offset = null, ?int $limit = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-additional-servies/groups', [
                'user.id' => $userId,
                'offset' => $offset,
                'limit' => $limit,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
