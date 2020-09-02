<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    public function items()
	{
		return $this->hasMany(OrderItem::class, 'order_id' );
	}
}
