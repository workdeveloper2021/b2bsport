<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Cart;
class Courier_item extends Model
{
    public function cartitem()
    {
        return $this->belongsTo(Cart::class,'cart_item');
    }

}

