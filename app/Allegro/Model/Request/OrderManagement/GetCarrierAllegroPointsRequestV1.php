<?php

namespace App\Allegro\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetCarrierAllegroPointsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct(
        $token,
        ?\DateTimeInterface $ifModifiedSince = null
    ) {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/order/carriers/ALLEGRO/points'),
            array_merge(
                $this->prepareHeaders($token, ContentType::PUBLIC_V1),
                $ifModifiedSince
                    ? ['If-Modified-Since' => $ifModifiedSince->format('r')]
                    : []
            )
        );
    }
}
