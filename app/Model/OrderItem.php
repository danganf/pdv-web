<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_item';

    public function order()
	{
		return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    
    public function product()
	{
		return $this->hasOne(Product::class, 'product_id');
	}
}
