<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:57
 */

namespace App\Allegro\Model\Request\Contacts;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;

class GetContactsRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-contacts', [
                'seller.id' => $token->claims()->get('user_name'),
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
