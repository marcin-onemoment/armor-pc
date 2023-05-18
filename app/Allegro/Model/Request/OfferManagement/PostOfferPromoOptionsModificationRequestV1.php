<?php

namespace App\Allegro\Model\Request\OfferManagement;

use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostOfferPromoOptionsModificationRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri(
                "/sale/offers/{$offerId}/promo-options-modification"
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
