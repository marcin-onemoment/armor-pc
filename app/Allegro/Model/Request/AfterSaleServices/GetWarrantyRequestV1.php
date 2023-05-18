<?php


namespace App\Allegro\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetWarrantyRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $warrantyId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/after-sales-service-conditions/warranties/{$warrantyId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
