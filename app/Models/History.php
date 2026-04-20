<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderId',
        'type',
        'coin',
        'firstname',
        'lastname',
        'bankname',
        'acctnumber',
        'status',
        'user_id',
        'value',
        'total',
        'network'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function referrals()
    {
        return $this->belongsTo('App\Models\Referral', 'id');
    }

    public function referred()
    {
        return $this->belongsTo('App\Models\Referral', 'id');
    }
}
