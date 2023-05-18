<?php


namespace App\Allegro\Model\Request\ParcelManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetDeliveryServicesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/parcel-management/delivery-services'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
