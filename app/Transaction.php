<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['product_id', 'user_id', 'quantity', 'total_price'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
