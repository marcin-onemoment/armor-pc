<?php


namespace App\Allegro\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetProductOfferOperationsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, string $operationId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/sale/product-offers/%s/operations/%s', $offerId, $operationId)),
            $this->prepareHeaders($token, ContentType::BETA_V2)
        );
    }
}
