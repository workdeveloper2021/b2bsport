<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Open_stocks;
class Cartons extends Model
{


     public function products()
    {
        return $this->hasMany(Open_stocks::class,'carton_id');
    }
}
