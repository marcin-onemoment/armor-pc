<?php
namespace App\Helper;

use App\Allegro\Helper\Api\Categories;
use App\Models\AllegroProduct;
use Illuminate\Support\Facades\DB;

class AllegroOffers
{
    public static function getCategorizedAllegroProducts(): array
    {
        $offers = [];

        $categories = AllegroProduct::select('category_id', DB::raw('count(*) as total'))
            ->orderBy('total', 'DESC')
            ->limit(5)
            ->groupBy('category_id')
            ->pluck('total','category_id')
            ->toArray();

        foreach ($categories as $categoryId => $count) {
            $categoryDetails = Categories::getCategoryDetails($categoryId);

            if ($categoryDetails) {
                $offers[$categoryId]['category_name'] = $categoryDetails->name;
                $offers[$categoryId]['products'] = AllegroProduct::query()->where('category_id', $categoryId)->limit(5)->get();
            }
        }

        return $offers;
    }

}
