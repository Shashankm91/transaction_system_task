@extends('layouts.app')

@section('content')
<h4>Dashboard</h4>

<form method="POST" action="/dashboard/calculate">
    @csrf
    <button class="btn btn-primary mb-3">Calculate Yesterday's Total</button>
</form>

<table class="table table-bordered">
    <tr><th>Date</th><th>Total Amount</th></tr>
    @foreach($jobs as $job)
        <tr>
            <td>{{ $job->date }}</td>
            <td>{{ $job->total_amount }}</td>
        </tr>
    @endforeach
</table>
@endsection
