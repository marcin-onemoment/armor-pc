<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:35
 */

namespace App\Allegro\Model\Request\ListingBadges;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetPromotionCampaignsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $promotionId = null, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/loyalty/promotion-campaigns', [
                'promotionId' => $promotionId,
                'limit' => $limit,
                'offset' => $offset,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
