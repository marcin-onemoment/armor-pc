<?php

namespace App\Jobs;

use App\Allegro\AllegroClient;
use App\Allegro\Helper\Api\Categories;
use App\Allegro\Helper\Api\SaleOffers;
use App\Allegro\Helper\CredentialsHelper;
use App\Allegro\Model\Request\UserOffersInformation\GetOffersRequestV1;
use App\Models\AllegroProduct;
use App\Models\AllegroCategory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;

class SaveAllegroCategoriesFromApi implements ShouldQueue
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
            $categoryDetails = Categories::getCategoryDetails($offer->category->id);

            $childCategory = AllegroCategory::query()->updateOrCreate([
                'allegro_id' => $categoryDetails->id
            ],[
                'allegro_id' => $categoryDetails->id,
                'name' => $categoryDetails->name,
            ]);

            if ($categoryDetails->parent) {
                $parentCategoryDetails = Categories::getCategoryDetails($categoryDetails->parent->id);

                $parentCategory = AllegroCategory::query()->updateOrCreate([
                    'allegro_id' => $parentCategoryDetails->id
                ],[
                    'allegro_id' => $parentCategoryDetails->id,
                    'name' => $parentCategoryDetails->name,
                ]);

                $childCategory->update(['parent_id' => $parentCategory->id]);
            }
        }
    }
}
