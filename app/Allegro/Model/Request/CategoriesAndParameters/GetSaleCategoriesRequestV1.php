<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:28
 */

namespace App\Allegro\Model\Request\CategoriesAndParameters;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetSaleCategoriesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $parentId = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/categories', []),
            $this->prepareHeaders((string)$token, ContentType::PUBLIC_V1)
        );
    }
}
