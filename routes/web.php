<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', fn () => redirect('/transactions'));

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/dashboard/calculate', [DashboardController::class, 'calculate']);

Route::view('/transactions', 'transactions');
