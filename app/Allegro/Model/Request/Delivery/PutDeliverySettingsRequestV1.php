<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 17.09.2019
 * Time: 12:31
 */

namespace App\Allegro\Model\Request\Delivery;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutDeliverySettingsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri('/sale/delivery-settings'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
