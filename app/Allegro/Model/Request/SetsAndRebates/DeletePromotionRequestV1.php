<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:32
 */

namespace App\Allegro\Model\Request\SetsAndRebates;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class DeletePromotionRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $promotionId)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri("/sale/loyalty/promotions/{$promotionId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
