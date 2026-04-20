<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinRange extends Model
{
    use HasFactory;

    protected $fillable = [
        'coin_id',
        'buy',
        'sell',
        'min_amount',
        'max_amount'
    ];

    public function rate()
    {
        return $this->belongsTo('App\Models\Rate', 'coin_id');
    }
}