<?php


namespace App\Allegro\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferPromotionPackagesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-promotion-packages'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
