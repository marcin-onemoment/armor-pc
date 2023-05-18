<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:51
 */

namespace App\Allegro\Model\Request\OfferTags;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class DeleteTagRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $tagId)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri("/sale/offer-tags/{$tagId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
