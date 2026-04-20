<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =  \App\Models\Referral::create([
            'referrer_id' => 'Joshua',
            'reffered_user_id' => 'Musonga',
            'email'=>    'admin@test.com',
            'verify_user'=> 1,
            'referral_link'=> substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),0, 8),
        ]);
    }
}
