<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
     protected $table = 'product';
    protected $fillable = ['name', 'price', 'quantity','cat_id'];
    // created_at update_at
    public $timestamps = false;
    protected $with = ['category'];
    public function category()
    {
        // belongsTo   hasOne
        // hasMany
        // return $this->belongsTo(Category::class, 'cat_id', 'category_id');
        return $this->belongsTo(Category::class,'cat_id');
    }
}
// update_at
