<!DOCTYPE html>
<html>
<head>
    <title>Transaction System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="#">System</a>
    <div>
        <a href="/dashboard" class="btn btn-light btn-sm">Dashboard</a>
        <a href="/transactions" class="btn btn-light btn-sm">Transactions</a>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
