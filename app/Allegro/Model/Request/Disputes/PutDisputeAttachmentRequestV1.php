<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:14
 */

namespace App\Allegro\Model\Request\Disputes;


use finfo;
use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutDisputeAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $attachmentId, string $fileBody)
    {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $headers = $this->prepareHeaders($token, ContentType::PUBLIC_V1);
        $headers['Content-Type'] = $finfo->buffer($fileBody);

        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/dispute-attachments/{$attachmentId}"),
            $headers,
            $fileBody
        );
    }
}
