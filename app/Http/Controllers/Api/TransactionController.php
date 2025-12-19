<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $skip = $request->get('skip', 0);
        $limit = $request->get('limit', 10);
        $searchId = $request->get('search_transaction_id');
        $status = $request->get('search_status', 'all');

        $query = Transaction::query();

        if (!empty($searchId)) {
            $query->where('transaction_id', 'like', "%$searchId%");
        }

        if ($status !== 'all') {
            $query->where('status', $status);
        }

        $total = $query->count();

        $data = $query
            ->orderBy('id', 'desc')
            ->skip($skip)
            ->take($limit)
            ->get();

        return response()->json([
            'total' => $total,
            'data' => $data
        ]);
    }
}
