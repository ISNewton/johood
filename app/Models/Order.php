<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'price',
    ];
    const STATUS_PENDING = 1;

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('title');
    }

    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('name');
    }
}
