<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:47
 */

namespace App\Allegro\Model\Request\SizeTables;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetSizeTablesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/size-tables', [
                'user.id' => $userId,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
