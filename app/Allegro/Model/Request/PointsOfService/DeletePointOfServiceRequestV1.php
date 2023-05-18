<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:54
 */

namespace App\Allegro\Model\Request\PointsOfService;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class DeletePointOfServiceRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri("/points-of-service/{$id}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
