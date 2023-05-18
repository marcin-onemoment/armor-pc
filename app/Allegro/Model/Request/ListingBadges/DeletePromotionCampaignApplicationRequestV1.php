<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:39
 */

namespace App\Allegro\Model\Request\ListingBadges;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class DeletePromotionCampaignApplicationRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $applicationId)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri("/sale/loyalty/promotion-campaign-applications/{$applicationId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
