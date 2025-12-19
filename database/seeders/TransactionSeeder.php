<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = ['pending', 'failed', 'success'];

        for ($i = 0; $i < 3; $i++) {
            $date = Carbon::today()->subDays($i);

            for ($j = 1; $j <= 100; $j++) {
                Transaction::create([
                    'transaction_id' => Str::uuid(),
                    'amount' => rand(100, 5000),
                    'name' => fake()->name(),
                    'email' => fake()->email(),
                    'status' => $statuses[array_rand($statuses)],
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);
            }
        }
    }
}
