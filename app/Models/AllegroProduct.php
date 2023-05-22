<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllegroProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'allegro_id',
        'name',
        'image_url',
        'amount',
    ];

    public function getOfferLinkAttribute()
    {
        return config('allegro.offer_link') . $this->allegro_id;
    }

    public function getPriceAttribute()
    {
        return number_format($this->amount, 2, '.') . ' zł';
    }

    public function categories()
    {
        return $this->belongsToMany(AllegroCategory::class, 'allegro_product_categories');
    }
}
