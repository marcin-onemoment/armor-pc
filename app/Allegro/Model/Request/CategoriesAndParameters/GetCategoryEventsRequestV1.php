<?php

namespace App\Allegro\Model\Request\CategoriesAndParameters;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCategoryEventsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/category-events', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
