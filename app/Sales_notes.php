<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Warehouses;
use App\Sales_note_products;
class Sales_notes extends Model{
    public function warehouse(){
        return $this->belongsTo(Warehouses::class, 'warehouse_id');
    }
    // public function warehouses_detail(){
    //     return $this->belongsTo(Warehouses::class, 'warehouse_id', 'id');
    // }
    public function products(){
        return $this->hasMany(Sales_note_products::class, 'sales_note_id')->with('product_configration');
    }
}
