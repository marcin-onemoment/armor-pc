<?php

namespace App\Allegro\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class DeleteMessageRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $messageId)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri(sprintf('/messaging/messages/%s', $messageId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
