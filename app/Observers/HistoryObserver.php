<?php

namespace App\Observers;

use App\Models\History;
use App\Models\Referral;

class HistoryObserver
{
    /**
     * Handle the History "created" event.
     *
     * @param  \App\Models\History  $history
     * @return void
     */
    public function created(History $history)
    {
        $referral = Referral::where('referral_id', $history->user_id)->first();

        if ($referral) {
            // Example: Award 10% of the transaction amount as a bonus
            $bonusAmount = $history->value * 3.5;

            // Assuming you have a method to credit bonuses to users
            $referral->user->creditBonus($bonusAmount);
        }
    }

    /**
     * Handle the History "updated" event.
     *
     * @param  \App\Models\History  $history
     * @return void
     */
    public function updated(History $history)
    {
        //
    }

    /**
     * Handle the History "deleted" event.
     *
     * @param  \App\Models\History  $history
     * @return void
     */
    public function deleted(History $history)
    {
        //
    }

    /**
     * Handle the History "restored" event.
     *
     * @param  \App\Models\History  $history
     * @return void
     */
    public function restored(History $history)
    {
        //
    }

    /**
     * Handle the History "force deleted" event.
     *
     * @param  \App\Models\History  $history
     * @return void
     */
    public function forceDeleted(History $history)
    {
        //
    }
}
