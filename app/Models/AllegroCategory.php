<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Video\Video;

class AllegroCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'allegro_id',
        'name',
        'parent_id',
        'enabled',
    ];

    public function parent()
    {
        return $this->hasOne(self::class, 'id', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(AllegroProduct::class, 'allegro_product_categories');
    }

}
