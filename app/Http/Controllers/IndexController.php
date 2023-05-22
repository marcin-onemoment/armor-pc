<?php

namespace App\Http\Controllers;

use App\Helper\AllegroOffers;
use App\Models\Opinion;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $opinions = Opinion::all();

        $offers = Cache::remember('allegro_offers', 43200, function (){
            return AllegroOffers::getCategorizedAllegroProducts();
        });

        return view('index', compact('opinions', 'offers'));
    }
}
