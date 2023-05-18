<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:08
 */

namespace App\Allegro\Model\Request\Disputes;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetDisputesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $checkoutFormId = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/disputes', [
                'checkoutForm.id' => $checkoutFormId,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
