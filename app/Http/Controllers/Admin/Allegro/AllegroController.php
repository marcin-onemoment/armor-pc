<?php

namespace App\Http\Controllers\Admin\Allegro;

use App\Allegro\AllegroAuth;
use App\Allegro\Helper\CredentialsHelper;
use App\Models\AllegroAuthorize;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;

class AllegroController
{
    public function index()
    {
        $allegroAuthorize = AllegroAuthorize::latest()->first();

        return view('admin.allegro.index', compact('allegroAuthorize'));
    }

    public function authorize()
    {
        $authService = new AllegroAuth(CredentialsHelper::getCredentials());
        $url = $authService->createAuthUrl();

        return Redirect::to($url);
    }

    public function saveAuthorization()
    {
        $authService = new AllegroAuth(CredentialsHelper::getCredentials());

        $code = $_GET['code'];

        if (!$code) {
            return redirect()->route('allegro.index')->with('errors', __('Authorization failed. Contact with IT support'));
        }

        $tokenBundle = $authService->fetchTokenFromCode($code);

        if (!$tokenBundle->getAccessToken()) {
            return redirect()->route('allegro.index')->with('errors', __('Authorization failed. Contact with IT support'));
        }

        AllegroAuthorize::query()->create([
            'access_token' => $tokenBundle->getAccessToken()->toString(),
            'refresh_token' => $tokenBundle->getRefreshToken()->toString(),
            'access_token_expired_at' => $tokenBundle->getAccessExpirationTime(),
            'refresh_token_expired_at' => $tokenBundle->getRefreshExpirationTime(),
        ]);

        return redirect()->route('allegro.index')->with('success', __('Authorization success'));
    }

    public function fetchOffers()
    {
        $allegroAuthorize = AllegroAuthorize::latest()->first();

        Artisan::call('allegro:fetch-products');

        return redirect()->route('allegro.index')->with('success', __('Success fetched'));
    }
}
