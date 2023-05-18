<?php

namespace App\Allegro\Helper;

use App\Allegro\AllegroAuth;
use App\Allegro\Model\Credentials\AppCredentials;
use App\Models\AllegroAuthorize;

class CredentialsHelper
{
    public static function getCredentials(): AppCredentials
    {
        return new AppCredentials(
            config('allegro.client_id'),
            config('allegro.client_secret'),
            config('allegro.redirect_url'),
            config('allegro.is_sandbox'),
        );
    }

    public static function getValidAccessToken()
    {
        $allegroAuthorize = AllegroAuthorize::latest()->first();

        if ($allegroAuthorize->isExpired()) {
            $authService = new AllegroAuth(self::getCredentials());
            $tokenBundle = $authService->fetchTokenFromRefresh($allegroAuthorize->refresh_token);

            $allegroAuthorize = AllegroAuthorize::query()->create([
                'access_token' => $tokenBundle->getAccessToken()->toString(),
                'refresh_token' => $tokenBundle->getRefreshToken()->toString(),
                'access_token_expired_at' => $tokenBundle->getAccessExpirationTime(),
                'refresh_token_expired_at' => $tokenBundle->getRefreshExpirationTime(),
            ]);
        }

        return $allegroAuthorize->access_token;
    }
}
