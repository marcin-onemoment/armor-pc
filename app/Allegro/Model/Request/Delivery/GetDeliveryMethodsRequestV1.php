<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:46
 */

namespace App\Allegro\Model\Request\Delivery;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetDeliveryMethodsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/delivery-methods"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
