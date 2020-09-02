<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $sku
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at 
 * @package App\Models
 * 
 */

class Product extends Model
{
    protected $table = 'product';
    protected $hidden = ['pivot'];

    /**
     * The roles that belong to the user.
     */
    public function providers()
    {
        return $this->belongsToMany(Provider::class, 'provider_product');
    }
}
