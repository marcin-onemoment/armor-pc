<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:12
 */

namespace App\Allegro\Model\Request\Disputes;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostDisputeAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $fileName, int $size)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri("/sale/dispute-attachments"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(['fileName' => $fileName, 'size' => $size])
        );
    }
}
