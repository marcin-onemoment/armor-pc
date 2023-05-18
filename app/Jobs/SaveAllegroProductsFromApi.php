<?php

namespace App\Jobs;

use App\Allegro\AllegroClient;
use App\Allegro\Helper\Api\SaleOffers;
use App\Allegro\Helper\CredentialsHelper;
use App\Allegro\Model\Request\UserOffersInformation\GetOffersRequestV1;
use App\Models\AllegroProduct;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
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
            AllegroProduct::query()->updateOrCreate([
                'allegro_id' => $offer->id
            ],[
                'allegro_id' => $offer->id,
                'name' => $offer->name,
                'category_id' => $offer->category->id,
                'image_url' => $offer->primaryImage->url,
                'amount' => $offer->sellingMode->price->amount,
            ]);
        }

        Cache::forget('allegro_offers');
    }
}
