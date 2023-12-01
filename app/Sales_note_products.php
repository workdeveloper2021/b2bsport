<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ProductConfiguration;
class Sales_note_products extends Model{

    public function product_configration(){
        return $this->belongsTo(ProductConfiguration::class, 'barcode', 'barcode')->with('product');
    }
}
