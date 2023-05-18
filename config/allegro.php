<?php

return [
    'client_id' => env('ALLEGRO_CLIENT_ID', 'e8db55f35ad94098be80d829f412c7b2'),
    'client_secret' => env('ALLEGRO_CLIENT_SECRET', 'AzXcpto1GfcrKWDMfPHGH3H1EJzKeO5vPKdJjsCwzynQGPwWILA6LHa8yqs1YIhF'),
    'redirect_url' => env('ALLEGRO_REDIRECT_URL', 'http://8da1-217-173-4-61.ngrok-free.app/allegro/save-authorization'),
    'is_sandbox' => env('ALLEGRO_IS_SANDBOX', false),
    'offer_link' => env('ALLEGRO_OFFER_LINK', 'https://allegro.pl/oferta/'),
    'shop_link' => env('ALLEGRO_SHOP_LINK', 'https://allegro.pl/uzytkownik/ArmorPC')
];
