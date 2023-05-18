<?php

namespace App\Allegro\Helper\Api;

use App\Allegro\AllegroClient;
use App\Allegro\Helper\CredentialsHelper;
use App\Allegro\Model\Request\CategoriesAndParameters\GetCategoryRequestV1;

class Categories
{
    public static function getCategoryDetails(string $categoryId)
    {
        $allegroClient = new AllegroClient(CredentialsHelper::getCredentials());

        $request = new GetCategoryRequestV1(
            CredentialsHelper::getValidAccessToken(),
            $categoryId
        );

        $response = $allegroClient->restRequest($request);
        $responseJson = (string)$response->getBody();
        return json_decode($responseJson);
    }
}
