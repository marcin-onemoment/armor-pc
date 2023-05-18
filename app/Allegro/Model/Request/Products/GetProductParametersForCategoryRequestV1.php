<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:59
 */

namespace App\Allegro\Model\Request\Products;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetProductParametersForCategoryRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $categoryId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/categories/{$categoryId}/product-parameters"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
