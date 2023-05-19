<?php

namespace App\Console\Commands;

use App\Allegro\AllegroClient;
use App\Allegro\Helper\Api\SaleOffers;
use App\Allegro\Helper\CredentialsHelper;
use App\Allegro\Model\Request\UserOffersInformation\GetOffersRequestV1;
use App\Jobs\SaveAllegroProductsFromApi;
use App\Models\AllegroProduct;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DownloadAllegroProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'allegro:fetch-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch allegro products';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $options = [
            'publication.status' => 'ACTIVE',
            'sort' => '-soldAmount'
        ];

        $offerResponse = SaleOffers::getSaleOffers($options);

        if (count($offerResponse->offers) > 0) {
            AllegroProduct::query()->delete();

            $offset = 0;
            $count = $offerResponse->count;
            $totalOffset = $offerResponse->totalCount;
            $pages = $count ? ceil($totalOffset/$count) : 1;

            for ($page = 0; $page < $pages; $page++) {
                dispatch(new SaveAllegroProductsFromApi((int)($page * $count)));
            }
        } else {
            Log::error('Error fetch allegro api products');
        }
    }
}
