<?php

namespace App\Allegro\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetParcelTrackingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $carrierId, array $waybills)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(
                "/order/carriers/$carrierId/tracking",
                ['waybill' => $waybills]
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
