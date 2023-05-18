<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:23
 */

namespace App\Allegro\Model\Request\AccountInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetAdditionalEmailRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $emailId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/account/additional-emails/{$emailId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
