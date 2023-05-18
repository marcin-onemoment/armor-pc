<?php

namespace App\Allegro\Model\Request\OfferManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferUnfilledParametersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offers/unfilled-parameters', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
