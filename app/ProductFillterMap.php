<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFillterMap extends Model
{
     protected $table = 'product_fillter_map';
     protected $fillable = ["product_id","fillter_id","crated_at","updated_at"];
}
