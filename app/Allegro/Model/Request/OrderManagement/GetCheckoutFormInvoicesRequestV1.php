<?php

namespace App\Allegro\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCheckoutFormInvoicesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $checkoutFormId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(
                sprintf('/order/checkout-forms/%s/invoices', $checkoutFormId)
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
