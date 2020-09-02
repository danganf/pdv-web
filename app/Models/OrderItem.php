<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * 
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property string $qty
 * @property decimal $price
 * @package App\Models
 * 
 */

class OrderItem extends Model
{
	protected $table = 'order_item';
	public $timestamps = false;

    public function order()
	{
		return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    
    public function product()
	{
		return $this->hasOne(Product::class, 'product_id');
	}
}
