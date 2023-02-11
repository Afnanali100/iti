<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $table ='category';
     protected $primaryKey = 'id';

      protected $fillable = ['name'];
    // created_at update_at
    public $timestamps = false;
    public function products()
    {
        // category_id
        // return $this->hasMany(Product::class, 'cat_id', 'category_id');
        return $this->hasMany(Product::class,'cat_id');
    }

   
}
// category product cat_id
