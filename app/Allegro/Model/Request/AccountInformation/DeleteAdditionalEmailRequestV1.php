<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:24
 */

namespace App\Allegro\Model\Request\AccountInformation;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Helper\UriFactory;
use App\Allegro\Model\Request\RequestTrait;

/**
 * Class DeleteAdditionalEmailRequestV1
 * @package Imper86\AllegroRestApiSdk\Model\Request\AccountInformation
 * @see https://developer.allegro.pl/documentation/#operation/deleteAdditionalEmailUsingDELETE
 */
class DeleteAdditionalEmailRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $emailId)
    {
        parent::__construct(
            'DELETE',
            $this->prepareApiUri("/account/additional-emails/{$emailId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
