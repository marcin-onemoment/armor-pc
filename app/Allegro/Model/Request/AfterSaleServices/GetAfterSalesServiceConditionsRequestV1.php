<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:18
 */

namespace App\Allegro\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetAfterSalesServiceConditionsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $type, string $sellerId, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/after-sales-service-conditions/{$type}", [
                'seller.id' => $sellerId,
                'limit' => $limit,
                'offset' => $offset,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
