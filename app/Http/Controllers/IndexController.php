<?php

namespace App\Http\Controllers;

use App\Models\Opinion;

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

        return view('index', compact('opinions'));
    }
}
