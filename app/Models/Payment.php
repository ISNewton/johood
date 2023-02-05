<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_date',
        'payment_status',
    ];

    const STATUS_PAID = 1;
    const STATUS_REFUSED = 2;

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
