<?php

namespace App\Allegro\Model\Request\SizeTables;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutSizeTableRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $tableId, array $body)
    {
        parent::__construct(
            "PUT",
            $this->prepareApiUri(sprintf("/sale/size-tables/%s", $tableId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
