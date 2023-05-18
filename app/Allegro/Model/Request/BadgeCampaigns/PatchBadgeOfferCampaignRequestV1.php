<?php

namespace App\Allegro\Model\Request\BadgeCampaigns;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PatchBadgeOfferCampaignRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, string $campaignId, array $body)
    {
        parent::__construct(
            'PATCH',
            $this->prepareApiUri(sprintf('/sale/badges/offers/%s/campaigns/%s', $offerId, $campaignId)),
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}
