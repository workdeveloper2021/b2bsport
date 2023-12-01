<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Categorykeys;
class Category extends Model
{
     protected $table = 'categories';

     public function keywords() 
     {
     return $this->hasMany(Categorykeys::class, 'category_id')->orderBy('name','ASC');
     }
}
