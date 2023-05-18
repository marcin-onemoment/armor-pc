<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 18:15
 */

namespace App\Allegro\Model\Request\CompatibleProducts;


use DateTime;
use DateTimeZone;
use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCompatibleProductsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [], ?DateTime $ifModifiedSince = null)
    {
        $headers = $this->prepareHeaders($token, ContentType::PUBLIC_V1);

        if ($ifModifiedSince) {
            $ifModifiedSince->setTimezone(new DateTimeZone('UTC'));

            $headers['If-Modified-Since'] = $ifModifiedSince->format('r');
        }

        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/compatible-products', $queryParameters),
            $headers
        );
    }
}
