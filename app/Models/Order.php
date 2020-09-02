<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property string $zip_code
 * @property string $address
 * @property string $number
 * @property string $comp
 * @property string $neighborhood
 * @property string $city
 * @property string $uf
 * @property decimal $total_price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at 
 * @package App\Models
 * 
 */

class Order extends Model
{
    protected $table = 'order';

    public function items()
	{
		return $this->hasMany(OrderItem::class, 'order_id' );
	}
}
