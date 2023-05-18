<?php

namespace App\Allegro\Model\Request\BadgeCampaigns;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetBadgeOperationRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $operationId)
    {
        parent::__construct(
            "GET",
            $this->prepareApiUri(
                sprintf("/sale/badge-operations/%s", $operationId)
            ),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
