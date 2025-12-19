@extends('layouts.app')

@section('content')
<h4>Transactions</h4>

<input type="text" id="searchId" placeholder="Transaction ID" class="form-control mb-2">

<select id="status" class="form-control mb-2">
    <option value="all">All</option>
    <option value="pending">Pending</option>
    <option value="failed">Failed</option>
    <option value="success">Success</option>
</select>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody id="tbody"></tbody>
</table>

<button class="btn btn-primary" onclick="loadData()">Load More</button>

<script>
let skip = 0;
let limit = 10;

//selecting elements
const searchInput = document.getElementById('searchId');
const statusSelect = document.getElementById('status');
const tbody = document.getElementById('tbody');

//function for loading data with pagination
function loadData(reset = false) {
    if (reset) {
        skip = 0;
        tbody.innerHTML = '';
    }

    const statusValue = statusSelect.value || 'all';

    fetch(`/api/transactions?skip=${skip}&limit=${limit}&search_transaction_id=${searchInput.value}&search_status=${statusValue}`)
        .then(res => res.json())
        .then(res => {
            res.data.forEach(t => {
                tbody.innerHTML += `
                    <tr>
                        <td>${t.transaction_id}</td>
                        <td>${t.amount}</td>
                        <td>${t.status}</td>
                    </tr>
                `;
            });

            skip += limit;
        });
}

// Event listeners
searchInput.addEventListener('keyup', () => loadData(true));
statusSelect.addEventListener('change', () => loadData(true));

// Initial load
loadData();
</script>
@endsection
