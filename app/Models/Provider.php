<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provider
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at 
 * @package App\Models
 * 
 */

class Provider extends Model
{
    protected $table = 'provider';
    protected $hidden = ['pivot'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'provider_product');
    }
}
