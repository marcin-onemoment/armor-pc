<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 30.07.2019
 * Time: 14:39
 */

namespace App\Allegro\Model\Request\Products;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PostProductProposalRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/sale/product-proposals'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
