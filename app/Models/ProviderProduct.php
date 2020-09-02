<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProviderProduct
 * 
 * @property int $id
 * @property int $provider_id
 * @property int $product_id
 * @package App\Models
 * 
 */

class ProviderProduct extends Model
{
    protected $table = 'provider_product';
    public $timestamps = false;
}
