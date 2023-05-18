<?php

namespace App\Allegro\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostThreadMessageRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $threadId, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri(sprintf('/messaging/threads/%s/messages', $threadId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
