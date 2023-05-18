<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:00
 */

namespace App\Allegro\Model\Request\OrderManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCheckoutFormRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/order/checkout-forms/{$id}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
