<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:55
 */

namespace App\Allegro\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetOfferPublicationCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offer-publication-commands/{$commandId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
