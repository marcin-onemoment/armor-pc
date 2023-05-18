<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:27
 */

namespace App\Allegro\Model\Request\Classifieds;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetClassifiedsPackageRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $packageId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/classifieds-packages/{$packageId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
