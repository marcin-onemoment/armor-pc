<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:16
 */

namespace App\Allegro\Model\Request\Disputes;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetDisputeAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $attachmentId)
    {
        $headers = $this->prepareHeaders($token, ContentType::PUBLIC_V1);

        unset($headers['Accept'], $headers['Content-Type']);

        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/dispute-attachments/{$attachmentId}"),
            $headers
        );
    }
}
