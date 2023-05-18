<?php

namespace App\Allegro\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCarrierAllegroTrackingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $waybills)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/order/carriers/ALLEGRO/tracking', [
                'waybill' => $waybills,
            ]),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
