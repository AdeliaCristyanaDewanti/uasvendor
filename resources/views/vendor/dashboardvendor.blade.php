<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Vendor.</title>
    <!-- Tambahkan link CSS framework seperti Bootstrap atau Tailwind jika diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #003a82;
            color: white;
            width: 200px;
            height: 100vh;
            position: fixed;
            padding: 20px;
        }
        .main {
            margin-left: 220px;
            padding: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            background-color: #005bff;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0041bf;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>BCA</h2>
        <ul style="list-style: none; padding: 0;">
            <li><strong>Dashboard</strong></li>
            <li>Management</li>
            <ul>
                <li>Daftar Project</li>
                <li>Tambah Project</li>
            </ul>
            <li>Management Vendor</li>
            <ul>
                <li>Daftar Vendor</li>
                <li>Tambah Vendor</li>
            </ul>
            <li>Management Tim IT</li>
            <ul>
                <li>Daftar Admin IT</li>
                <li>Tambah Admin IT</li>
            </ul>
            <li>Laporan</li>
            <ul>
                <li>Laporan Project</li>
                <li>Laporan Vendor</li>
                <li>Laporan Tim IT</li>
            </ul>
            <li>Pengaturan</li>
        </ul>
    </div>
    <div class="main">
        <h1>Welcome</h1>
        <div>
            <a href="#" class="btn">Registrasi Admin</a>
            <a href="#" class="btn">Registrasi Vendor</a>
            <a href="#" class="btn">Registrasi Tim IT</a>
        </div>
    </div>
</body>
</html>
