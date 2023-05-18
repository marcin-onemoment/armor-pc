<?php


namespace App\Allegro\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutReturnPolicyRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $returnPolicyId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/after-sales-service-conditions/return-policies/{$returnPolicyId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
