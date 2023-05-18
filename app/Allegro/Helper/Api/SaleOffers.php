<?php

namespace App\Allegro\Helper\Api;

use App\Allegro\AllegroClient;
use App\Allegro\Helper\CredentialsHelper;
use App\Allegro\Model\Request\UserOffersInformation\GetOffersRequestV1;

class SaleOffers
{
    public static function getSaleOffers($options = [])
    {
        $allegroClient = new AllegroClient(CredentialsHelper::getCredentials());

        $request = new GetOffersRequestV1(
            CredentialsHelper::getValidAccessToken(),
            $options
        );

        $response = $allegroClient->restRequest($request);
        $responseJson = (string)$response->getBody();
        return json_decode($responseJson);
    }

    public static function getSaleOffer($offerId)
    {
        $allegroClient = new AllegroClient(CredentialsHelper::getCredentials());

        $request = new GetOffersRequestV1(
            CredentialsHelper::getValidAccessToken(),
            $offerId
        );

        $response = $allegroClient->restRequest($request);
        $responseJson = (string)$response->getBody();
        return json_decode($responseJson);
    }
}
