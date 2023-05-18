<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:22
 */

namespace App\Allegro\Model\Request\AccountInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostAdditionalEmailRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $email)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri("/account/additional-emails"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(['email' => $email])
        );
    }
}
