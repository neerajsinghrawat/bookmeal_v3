<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
     protected $table = 'product_features';
 
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['product_features'];
}
