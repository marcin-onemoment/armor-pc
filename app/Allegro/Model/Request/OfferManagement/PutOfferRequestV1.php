<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:44
 */

namespace App\Allegro\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutOfferRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/offers/{$offerId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
