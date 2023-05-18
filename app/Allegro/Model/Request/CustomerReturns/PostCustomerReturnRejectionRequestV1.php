<?php

namespace App\Allegro\Model\Request\CustomerReturns;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostCustomerReturnRejectionRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $customerReturnId, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri(sprintf('/order/customer-returns/%s/rejection', $customerReturnId)),
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}
