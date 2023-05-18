<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:39
 */

namespace App\Allegro\Model\Request\ImagesAndAttachments;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostOfferAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $type, string $fileName)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri("/sale/offer-attachments"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode([
                'type' => $type,
                'file' => ['name' => $fileName],
            ])
        );
    }
}
