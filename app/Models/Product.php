<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'subcategory_id',
        'brand',
        'weight',
        'gender',
        'sku_number',
        'stock_quantity',
        'tag',
        'refundable',
        'product_display_image',
        'product_gallery_images',
        'stock_quantity',
        'stock_status',
        'price',
        'discount_price',
        'description',
    ];

    protected $casts = [
        'product_gallery_images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

}
