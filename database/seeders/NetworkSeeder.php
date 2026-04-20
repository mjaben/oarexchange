<?php

namespace Database\Seeders;

use App\Models\Rate;
use App\Models\Network;
use Illuminate\Database\Seeder;

class NetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'USDT' => [
                ['name' => 'Tron', 'type' => 'TRC20'],
                ['name' => 'Ethereum', 'type' => 'ERC20'],
                ['name' => 'BSC', 'type' => 'BEP20'],
                ['name' => 'TON', 'type' => 'TON'],
                ['name' => 'Aptos', 'type' => 'APTOS'],
                ['name' => 'Solana', 'type' => 'SOL'],
                ['name' => 'Polygon', 'type' => 'Polygon POS'],
            ],
            'USDC' => [
                ['name' => 'Ethereum', 'type' => 'ERC20'],
                ['name' => 'Solana', 'type' => 'SOL'],
                ['name' => 'BSC', 'type' => 'BEP20'],
                ['name' => 'Sonic', 'type' => 'Sonic'],
                ['name' => 'Polygon', 'type' => 'Polygon POS'],
                ['name' => 'Mantle', 'type' => 'Mantle Network'],
            ],
            'Ethereum' => [
                ['name' => 'Ethereum', 'type' => 'ERC20'],
                ['name' => 'BSC', 'type' => 'BEP20'],
                ['name' => 'Mantle', 'type' => 'Mantle Network'],
                ['name' => 'Arbitrum', 'type' => 'Arbitrum One'],
            ],
            'MNT' => [
                ['name' => 'Ethereum', 'type' => 'ERC20'],
                ['name' => 'Mantle', 'type' => 'Mantle Network'],
            ],
            'XRP' => [
                ['name' => 'Ripple', 'type' => 'Memo'],
            ],
            // 'NFT' => [
            //     ['name' => 'TRON', 'type' => 'TRC20'],
            // ],
        ];

        foreach ($data as $coin => $networks) {
            $rate = Rate::where('coin', $coin)->first();

            if ($rate) {
                foreach ($networks as $network) {
                    Network::create([
                        'address_id' => $rate->id,
                        'name'    => $network['name'],
                        'type'    => $network['type'],
                    ]);
                }
            } else {
                $this->command->warn("Rate for {$coin} not found. Skipped.");
            }
        }
    }
}