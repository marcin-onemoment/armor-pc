<?php


namespace App\Allegro\Model\Request\ParcelManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetPickupDateProposalsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $query)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/parcel-management/pickup-date-proposals', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
