<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Order;
class Cart extends Model
{
     protected $table = 'carts';
     protected $fillable = ['order_id', 'product_id', 'configuration_id', 'quantity' , 'price_per_qty', 'total_price', 'discount_per_qty', 'final_price', 'discounted_percentage','created_at', 'updated_at'];

     public function order_paid()
     {
     return $this->belongsTo(Order::class, 'order_id')->where('payment_status',9)->where('order_status',1)->where('is_delete','N')->where('order_date', '>' ,'2023-11-25 00:00:00');
     }
}
