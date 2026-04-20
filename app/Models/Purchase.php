<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'btcaddress',
        'value', 
        'rate', 
        'method', 
        'total',
        'network',
        'type',
        'status',
        'orderId',
        'user_id',
        'sender_name'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
