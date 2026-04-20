<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'referral_id'];


    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function referrer()
    {
        return $this->belongsTo('App\Models\User', 'referral_id');
    }

    public function referral()
    {
        return $this->belongsTo('App\Models\User', 'referral_id');
    }

    public function histories()
    {
        return $this->belongsTo('App\Models\History','user_id', 'referral_id');
    }
}
