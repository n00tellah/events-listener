<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $fillable = [
        'item',
        'item_price',
        'item_quantity',
        'payment_method',
    ];
    public function students(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }
}
