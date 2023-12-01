<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Sales_note_products;
use App\Attribute;
use App\Product;
class ProductConfiguration extends Model
{
     protected $table = 'product_configuration';

     public function product()
     {
     return $this->belongsTo(Product::class, 'product_id');
     }

     public function attribute()
     {
     return $this->belongsTo(Attribute::class, 'AttributeColor','id');
     }

     public function attributesize()
     {
     return $this->belongsTo(Attribute::class, 'AttributeSize','id');
     }

     public function salesProduct()
     {
     return $this->hasMany(Sales_note_products::class, 'product_id','product_id');
     }
}
