<?php

namespace App\Allegro\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetThreadRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $threadId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/messaging/threads/%s', $threadId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
