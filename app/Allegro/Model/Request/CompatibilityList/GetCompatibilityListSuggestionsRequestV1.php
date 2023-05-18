<?php


namespace App\Allegro\Model\Request\CompatibilityList;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCompatibilityListSuggestionsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/compatibility-list-suggestions', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
