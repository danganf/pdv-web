<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'provider';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'provider_product');
    }
}
