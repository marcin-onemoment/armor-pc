<?php


namespace App\Allegro\Model\Request\OrderManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCarriersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/order/carriers'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
