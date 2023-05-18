<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:35
 */

namespace App\Allegro\Model\Request\UserOffersInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOffersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offers', $queryParameters),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
