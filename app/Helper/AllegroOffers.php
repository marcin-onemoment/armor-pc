<?php
namespace App\Helper;

use App\Allegro\Helper\Api\Categories;
use App\Models\AllegroCategory;
use App\Models\AllegroProduct;
use Illuminate\Support\Facades\DB;

class AllegroOffers
{
    public static function getCategorizedAllegroProducts(): array
    {
        $offers = [];

        $categories = AllegroCategory::query()->whereNull('parent_id')->where('enabled', true)->get();

        foreach ($categories as $category) {
                $offers[$category->id]['category_name'] = $category->name;
                $offers[$category->id]['products'] = AllegroProduct::query()->whereHas('categories', function ($query) use ($category) {
                    $query->where('parent_id', $category->id)->where('enabled', true);
                })->limit(5)->get();
        }

        return $offers;
    }

}
