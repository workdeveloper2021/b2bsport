<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
class Categorykeys extends Model
{
     protected $table = 'categorykeys';
     protected $fillable = ['category_id', 'name', 'created_at', 'updated_at'];
     public function category() 
     {
        return $this->belongsTo(Category::class, 'category_id');
     }

}
