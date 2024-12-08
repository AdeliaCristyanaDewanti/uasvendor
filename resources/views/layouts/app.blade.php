<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Data Project')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light px-3">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://via.placeholder.com/30" alt="Logo" width="30" height="30" class="me-2">
            <span>BCA</span>
        </a>
        <div class="d-flex align-items-center">
            <span class="me-2">Adelia Cristyana D.</span>
            <span class="badge bg-warning text-dark">Super Admin</span>
        </div>
    </nav>
<!-- Content -->
<div class="container mt-4">
    @yield('content')
</div>

<!-- Footer (Optional) -->
<footer class="text-center py-3">
    <p>&copy; {{ date('Y') }} BCA - All Rights Reserved</p>
</footer>
</body>
</html>
