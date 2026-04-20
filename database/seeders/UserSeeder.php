<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $admin =  \App\Models\User::create([
            'name' => 'Oyedare',
            'last_name' => 'Ademola',
            'email'=>    'info@oarexchange.com',
            'verify_user'=> 1,
            'ref_code'=> 0000001,
            'referral_code'=> substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),0, 8),
            'bonus_balance' => 0,
            'code'=> random_int(100000, 999999),
            'username' => 'Oarex',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);
        $admin->attachRole('admin');
    }
}
