<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:07
 */

namespace App\Allegro\Model\Request\Payments;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

/**
 * Class GetPaymentIdMappingRequestV1
 * @package Imper86\AllegroRestApiSdk\Model\Request\Payments
 * @deprecated https://github.com/allegro/allegro-api/issues/3134
 */
class GetPaymentIdMappingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $paymentId, ?string $transactionId)
    {
        if ($paymentId) {
            $query['paymentId'] = $paymentId;
        }

        if ($transactionId) {
            $query['transactionId'] = $transactionId;
        }

        parent::__construct(
            'GET',
            $this->prepareApiUri('/payments/payment-id-mappings', $query ?? []),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
