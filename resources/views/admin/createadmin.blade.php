<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h3>Data Admin</h3>
        <a href="{{ route('admins.create') }}" class="btn btn-primary mb-3">+ Add New Vendor</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $index => $admins)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $admins['name'] }}</td>
                        <td>{{ $admins['contact'] }}</td>
                        <td>{{ $admins['email'] }}</td>
                        <td>
                            <a href="{{ route('admins.edit', $admins['id']) }}" class="btn btn-warning btn-sm">Update</a>
                            <form action="{{ route('admins.destroy', $admins['id']) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
