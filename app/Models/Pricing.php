<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
     protected $fillable = ['title', 'price', 'is_popular'];

    public function items()
    {
        return $this->hasMany(PricingItem::class);
    }
}
