<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:56
 */

namespace App\Allegro\Model\Request\Contacts;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetContactsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $sellerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-contacts', [
                'seller.id' => $sellerId,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
