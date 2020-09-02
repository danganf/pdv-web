<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $sku
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Store $store
 * @property \Illuminate\Database\Eloquent\Collection $banner_promotionals
 * @property \Illuminate\Database\Eloquent\Collection $products
 *
 * @package App\Model
 */

class Product extends Model
{
    protected $table = 'product';

    /**
     * The roles that belong to the user.
     */
    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'provider_product');
    }
}
