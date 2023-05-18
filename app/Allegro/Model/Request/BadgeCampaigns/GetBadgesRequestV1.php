<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.08.2019
 * Time: 10:45
 */

namespace App\Allegro\Model\Request\BadgeCampaigns;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetBadgesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/badges', $queryParameters),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
