<?php

namespace App\Http\Controllers;

use App\Jobs\CalculateYesterdayTransaction;
use App\Models\TransactionJob;

class DashboardController extends Controller
{
    public function calculate()
    {
        (new CalculateYesterdayTransaction())->handle();
        return redirect()->back()->with('success', 'Calculation Completed');
    }

    public function index()
    {
        $jobs = TransactionJob::orderBy('date', 'desc')->get();
        return view('dashboard', compact('jobs'));
    }
}
