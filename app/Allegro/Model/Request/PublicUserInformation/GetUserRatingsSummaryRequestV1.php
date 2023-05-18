<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:25
 */

namespace App\Allegro\Model\Request\PublicUserInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetUserRatingsSummaryRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/users/{$userId}/ratings-summary"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
