<?php


namespace App\Allegro\Model\Request\CommissionRefunds;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetRefundClaimsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/order/refund-claims', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
