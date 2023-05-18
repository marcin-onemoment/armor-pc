<?php


namespace App\Allegro\Model\Request\ParcelManagement;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;
use Ramsey\Uuid\Uuid;

class PutParcelPickupRequestCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body, ?string $commandId = null)
    {
        $commandId = $commandId ?? Uuid::uuid4()->toString();

        parent::__construct(
            'PUT',
            $this->prepareApiUri(sprintf('/parcel-management/parcel-pickup-request-commands/%s', $commandId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
