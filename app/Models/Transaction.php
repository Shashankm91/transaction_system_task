<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'amount',
        'name',
        'email',
        'status',
        'created_at'
    ];
}
