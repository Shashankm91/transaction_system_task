<?php

namespace App\Jobs;

use App\Models\Transaction;
use App\Models\TransactionJob;
use Carbon\Carbon;

class CalculateYesterdayTransaction
{
    public function handle(): void
    {
        $yesterday = Carbon::yesterday()->toDateString();

        $total = Transaction::where('status', 'success')
            ->whereDate('created_at', $yesterday)
            ->sum('amount');

        TransactionJob::updateOrCreate(
            ['date' => $yesterday],
            ['total_amount' => $total]
        );
    }
}
