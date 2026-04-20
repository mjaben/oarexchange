<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetReferrals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'referrals:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset referral transactions and bonuses at the end of each month';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::query()->update([
            'referrals_count' => 0,
            'bonus_balance' => 0,
            'total_transactions_from_referrals' => 0,
        ]);

        $this->info('Referral transactions and bonuses have been reset.');
    }
}
