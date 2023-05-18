<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:59
 */

namespace App\Allegro\Model\Request\Contacts;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutContactRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/offer-contacts/{$id}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
