<?php


namespace App\Allegro\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetImpliedWarrantyRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, $impliedWarrantyId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/after-sales-service-conditions/implied-warranties/{$impliedWarrantyId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
