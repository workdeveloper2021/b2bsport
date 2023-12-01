<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ="orders";
    protected $fillable = ['order_id','invoice_id','customer_id','order_date','total_cart_item','sub_total','total_shipping_amount','discount','total','shipping_address','billing_address','order_status','payment_status','payment_mode','created_at','updated_at','is_completed','is_buy_now','volume_weight','chargable_weight','basic_freight','ess','fuel','caf','idc','gst','subtotal','volume_weight2','chargable_weight2','basic_freight2','ess2','fuel2','caf2','idc2','gst2','subtotal2','zone','order_type','is_offline','order_remark','type_of_order','offline_order_no'];

    public function addresses(){
        return $this->hasOne('App\Address',"customer_id","customer_id");
    }

    public function customer(){
        return $this->belongsTo('App\Customer',"customer_id","id");
    }

    public function carts(){
        return $this->hasMany('App\Cart',"order_id","id");
    }
    public function invoice(){
        return $this->belongsTo('App\Invoice',"order_id","id");
    }
}
