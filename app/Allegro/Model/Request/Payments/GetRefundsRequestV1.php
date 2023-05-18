<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 05.08.2019
 * Time: 13:46
 */

namespace App\Allegro\Model\Request\Payments;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetRefundsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/payments/refunds', $queryParameters),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
