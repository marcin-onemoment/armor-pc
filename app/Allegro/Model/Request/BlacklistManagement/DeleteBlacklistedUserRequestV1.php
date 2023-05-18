<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:30
 */

namespace App\Allegro\Model\Request\BlacklistManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class DeleteBlacklistedUserRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $excludedUserId)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri("/sale/blacklisted-users/{$excludedUserId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
