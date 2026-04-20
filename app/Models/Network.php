<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate_id',
        'name',
        'type'
    ];

    public function rates()
    {
        return $this->belongsTo('App\Models\Rate');
    }

    public function rate()
    {
        return $this->belongsTo(Rate::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}