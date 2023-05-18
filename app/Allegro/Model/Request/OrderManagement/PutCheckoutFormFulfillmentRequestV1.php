<?php

namespace App\Allegro\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutCheckoutFormFulfillmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct(
        $token,
        string $checkoutFormId,
        string $status,
        string $lineItemsSent = "ALL"
    ) {
        parent::__construct(
            "PUT",
            $this->prepareApiUri(
                "/order/checkout-forms/{$checkoutFormId}/fulfillment"
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode([
                "status" => $status,
                "shipmentSummary" => ["lineItemsSent" => $lineItemsSent],
            ])
        );
    }
}
