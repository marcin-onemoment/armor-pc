<?php

namespace App\Allegro\Model\Request\OfferManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferPromoOptionsCommandTasksRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(
                "/sale/offers/promo-options-commands/{$commandId}/tasks"
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
