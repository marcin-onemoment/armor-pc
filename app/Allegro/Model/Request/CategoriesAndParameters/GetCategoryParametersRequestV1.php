<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:32
 */

namespace App\Allegro\Model\Request\CategoriesAndParameters;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCategoryParametersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $categoryId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/categories/{$categoryId}/parameters"),
            $this->prepareHeaders((string)$token, ContentType::PUBLIC_V1)
        );
    }
}
