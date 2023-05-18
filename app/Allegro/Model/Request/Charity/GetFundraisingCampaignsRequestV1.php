<?php


namespace App\Allegro\Model\Request\Charity;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetFundraisingCampaignsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $query)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/charity/fundraising-campaigns', $query),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
