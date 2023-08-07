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

class RefreshAllegroTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'allegro:refresh-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh allegro token';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        try {
            $token = CredentialsHelper::getValidAccessToken();
            Log::info($token . 'successfully generated.');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
