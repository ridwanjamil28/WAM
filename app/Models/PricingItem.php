<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingItem extends Model
{
   protected $fillable = ['pricing_id', 'item', 'type'];

    public function pricing()
    {
        return $this->belongsTo(Pricing::class);
    }
}
