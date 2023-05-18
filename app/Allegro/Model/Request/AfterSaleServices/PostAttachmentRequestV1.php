<?php


namespace App\Allegro\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $fileName)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/after-sales-service-conditions/attachments'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(['name' => $fileName])
        );
    }
}
