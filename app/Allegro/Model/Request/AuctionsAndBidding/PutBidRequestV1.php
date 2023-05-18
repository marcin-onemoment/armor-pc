<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:37
 */

namespace App\Allegro\Model\Request\AuctionsAndBidding;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutBidRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/bidding/offers/{$offerId}/bid"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
