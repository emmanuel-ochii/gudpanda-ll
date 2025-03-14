<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'image',
    ];

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
