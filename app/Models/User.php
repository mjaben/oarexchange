<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'address',
        'verify_user',
        'code',
        'city',
        'country',
        'username',
        'referral_code',
        'ref_code',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function histories()
    {
        return $this->hasMany('App\Models\History', 'user_id');
    }

    public function referrals()
    {
        return $this->hasMany('App\Models\Referral', 'user_id');
    }

    public function referredBy()
    {
        return $this->belongsTo('App\Models\Referral', 'user_id');
    }

    public function creditBonus($amount)
    {
        $this->bonus_balance += $amount;
        $this->save();
    }

    public function getReferralsCountAttribute()
    {
        return $this->referrals()->count();
    }

    public function getBonusFromReferralsAttribute()
    {
        return $this->referrals()->with('referral')->get()->sum(function ($referral) {
            return optional($referral->referral)->bonus_balance ?? 0;
        });
    }

    // public function getTotalTransactionsFromReferralsAttribute()
    // {
    //     return $this->referrals()->with('referral.histories')->get()->sum(function ($referral) {
    //         return optional($referral->referral)->histories->sum('value') ?? 0;
    //     });
    // }
    
    public function getTotalTransactionsFromReferralsAttribute()
    {
        return $this->referrals()->with('referral.histories')->get()->sum(function ($referral) {
            return optional(optional($referral->referral)->histories)->sum('value') ?? 0;
        });
    }

}
