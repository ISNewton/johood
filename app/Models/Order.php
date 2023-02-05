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

    protected $casts = [
        'status' => 'integer',
    ];

    const STATUS_PENDING = 1;
    const STATUS_REVIEWING= 2;
    const STATUS_RECEIVED= 3;

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
