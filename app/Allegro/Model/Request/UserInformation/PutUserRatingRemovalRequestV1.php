<?php


namespace App\Allegro\Model\Request\UserInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutUserRatingRemovalRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $ratingId, string $message)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/user-ratings/{$ratingId}/removal"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            ['request' => ['message' => $message]]
        );
    }
}
