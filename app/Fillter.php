<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ProductFillterMap;
class Fillter extends Model
{
     protected $table = 'fillters';

     public function productmap() 
     {
     return $this->hasMany(ProductFillterMap::class, 'fillter_id');
     }
}
