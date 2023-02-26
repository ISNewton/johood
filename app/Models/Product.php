<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'quantity',
        'price',
        'is_visible',
        'price_for_12_months',
        'price_for_24_months',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    const MEDIA_COLLECTION = 'products';

    public function images()
    {
        return $this->media()->where('collection_name', self::MEDIA_COLLECTION);
    }

    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class,'orders');
    }

    public function projects() : BelongsToMany
    {
        return $this->belongsToMany(Project::class , 'product_projects');
    }
}
