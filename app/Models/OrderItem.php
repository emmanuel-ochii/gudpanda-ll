<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;


class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'product_slug',
        'category_slug',
        'unit_price',
        'quantity',
        'line_total',
        'product_image'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
