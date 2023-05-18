<?php

namespace App\Allegro\Model\Request\CustomerReturns;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCustomerReturnsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/order/customer-returns', $query),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
