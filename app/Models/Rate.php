<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'coin_image',
        'coin',
        'buy',
        'sell',
        'min_amount',
        'max_amount'
    ];

    public function address()
    {
        return $this->hasOne('App\Models\Address')->orderBy('id', 'DESC');
    }

    public function networks()
    {
        return $this->hasMany('App\Models\Network');
    }

    public function coinranges()
    {
        return $this->hasMany('App\Models\CoinRange', 'coin_id');
    }

}