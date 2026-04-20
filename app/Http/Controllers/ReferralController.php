<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\History;
use App\Models\Referral;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function index()
{
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
    }

    $ref_code = User::where('id', auth()->user()->id)->first();
    $referal_code = $ref_code->referral_code;
    
    if (now()->day == 1) {
        $this->resetReferralData();
    }

    $admin_rec = User::with(['referrals.referral.histories', 'histories'])->get();

    foreach ($admin_rec as $user) {
        $user->referrals_count = $user->referrals ? $user->referrals->count() : 0;

        $user->total_transactions_from_referrals = $user->referrals->sum(function ($referral) {
            return optional($referral->referral)->histories ? $referral->referral->histories->sum('value') : 0;
        });

        $user->individual_transactions = $user->histories;
        $user->total_transactions = $user->histories ? $user->histories->sum('value') : 0;
    }

    return view('referrals.manage')->with('referal_code', $referal_code)
                                   ->with('admin_rec', $admin_rec);
}

private function resetReferralData()
    {
        // Get the current date and the last reset date
        $today = now()->startOfMonth();
        $lastReset = User::first()->last_reset;

        // Check if it's the first of the month and hasn't been reset yet this month
        if (!$lastReset || $lastReset < $today) {
            User::query()->update([
                'bonus_balance' => 0,
                'last_reset' => now()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
