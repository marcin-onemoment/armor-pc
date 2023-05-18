<?php


namespace App\Allegro\Model\Request\AllegroPrices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetAllegroPricesAccountEligibilityRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/allegro-prices-account-eligibility'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
