<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:58
 */

namespace App\Allegro\Model\Request\Contacts;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetContactRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offer-contacts/{$id}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
