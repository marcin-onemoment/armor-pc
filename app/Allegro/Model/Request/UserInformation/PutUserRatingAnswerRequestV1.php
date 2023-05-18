<?php


namespace App\Allegro\Model\Request\UserInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class PutUserRatingAnswerRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $ratingId, string $message)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sales/user-ratings/{$ratingId}/answer"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            ['message' => $message]
        );
    }
}
