<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Courier_item;

class Courier_history extends Model
{

   public function item()
    {
        return $this->hasMany(Courier_item::class,'carton_id')->with('cartitem');
    }
}
