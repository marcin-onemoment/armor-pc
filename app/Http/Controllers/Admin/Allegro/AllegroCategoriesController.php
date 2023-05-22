<?php

namespace App\Http\Controllers\Admin\Allegro;

use App\Http\Controllers\Controller;
use App\Models\AllegroCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

class AllegroCategoriesController extends Controller
{
    public function index()
    {
        $categories = AllegroCategory::query()->whereNull('parent_id')->withCount('products')->orderBy('products_count', 'desc')->get();

        return view('admin.allegro.categories.index', compact('categories'));
    }

    public function edit($id)
    {
        $category = AllegroCategory::find($id);

        $childCategories = $category->childs;

        return view('admin.allegro.categories.edit', compact('childCategories'));
    }

    public function switch(Request $request, $id)
    {
        $category = AllegroCategory::find($id);

        $switch = !$category->enabled;

        $category->update(['enabled' => $switch]);

        $category->childs()->update(['enabled' => $switch]);

        Cache::forget('allegro_offers');

        return redirect()->route('allegro.categories')->with('success', __('Category updated'));
    }
}
