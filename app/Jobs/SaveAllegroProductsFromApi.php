<?php

namespace App\Jobs;

use App\Allegro\Helper\Api\Categories;
use App\Allegro\Helper\Api\SaleOffers;
use App\Models\AllegroCategory;
use App\Models\AllegroProduct;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;

class SaveAllegroProductsFromApi implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $offset = 0;
    /**
     * Create a new job instance.
     */
    public function __construct(int|string $offset)
    {
        $this->offset = $offset;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $options = [
            'publication.status' => 'ACTIVE',
            'sort' => '-soldAmount',
            'offset' => $this->offset
        ];

        $offerResponse = SaleOffers::getSaleOffers($options);

        if (!count($offerResponse->offers)) {
            return;
        }

        foreach ($offerResponse->offers as $offer) {
            $product = AllegroProduct::query()->updateOrCreate([
                'allegro_id' => $offer->id
            ],[
                'allegro_id' => $offer->id,
                'name' => $offer->name,
                'image_url' => $offer->primaryImage->url,
                'amount' => $offer->sellingMode->price->amount,
            ]);

            $this->setCategory($product, $offer->category->id);
        }


        Cache::forget('allegro_offers');
    }

    protected function setCategory(AllegroProduct $allegroProduct, $categoryDetails): void
    {
        $child = Categories::getCategoryDetails($categoryDetails);

        $childCategory = AllegroCategory::where('allegro_id', $child->id)->first();

        if ($childCategory) {
            $allegroProduct->categories()->attach($childCategory);
        }


        if ($child && $child->parent->id) {
            $parent = Categories::getCategoryDetails($child->parent->id);

            $parentCategory = AllegroCategory::where('allegro_id', $parent->id)->first();

            if ($parentCategory) {
                $allegroProduct->categories()->attach($parentCategory);
            }
        }
    }
}
