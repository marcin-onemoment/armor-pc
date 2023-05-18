<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllegroAuthorize extends Model
{
    use HasFactory;

    protected $fillable = [
        'access_token',
        'refresh_token',
        'access_token_expired_at',
        'refresh_token_expired_at',
    ];

    public function isExpired()
    {
        $expiredDate = $this->access_token_expired_at;

        return $expiredDate < Carbon::now();
    }
}
