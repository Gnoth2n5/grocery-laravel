<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'total', 'shipping_address_id', 'coupon_id', 'status_id', 'payment_method'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function shippingAddress(): BelongsTo
    {
        return $this->belongsTo(Addresses::class, 'shipping_address_id', 'id');
    }

    public function coupon(): BelongsToMany
    {
        return $this->belongsToMany(Coupons::class, 'coupon_id', 'id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class, 'status_id', 'id');
    }

    public function orderDetails(): HasOne
    {
        return $this->hasOne(OrderDetail::class);
    }
}
