<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:41
 */

namespace App\Allegro\Model\Request\Delivery;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetShippingRatesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $sellerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/shipping-rates', [
                'seller.id' => $sellerId,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
