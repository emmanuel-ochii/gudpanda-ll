<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
     protected $fillable = [
        'user_id',
        'email',
        'first_name',
        'last_name',
        'company',
        'country',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'phone',
        'notes',
        'subtotal',
        'shipping_fee',
        'coupon_code',
        'coupon_discount',
        'total',
        'status'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
