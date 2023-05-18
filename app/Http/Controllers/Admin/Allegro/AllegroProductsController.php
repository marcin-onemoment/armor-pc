<?php

namespace App\Http\Controllers\Admin\Allegro;

use App\Models\AllegroProduct;

class AllegroProductsController
{
    public function index()
    {
        $products = AllegroProduct::query()->paginate(20);

        return view('admin.allegro.products.index', compact('products'));

    }
}
