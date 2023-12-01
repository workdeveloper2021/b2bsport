<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
class Brand extends Model
{
     protected $table = 'brands';

     public function products() 
     {
     return $this->hasMany(Product::class, 'brand_id')->where("is_active","Y")->where('is_completed','Y')->where('is_verified','Y');
     }
     
}
