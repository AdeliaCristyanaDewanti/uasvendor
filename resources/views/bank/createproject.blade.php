<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Data Project</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #0047AB;
            color: #ffffff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar img {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }
        .navbar span {
            font-size: 16px;
        }
        .content {
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #0047AB;
            font-weight: bold;
            margin-bottom: 25px;
        }
        .form-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group input:focus {
            outline: none;
            border-color: #0047AB;
            box-shadow: 0 0 5px rgba(0, 71, 171, 0.5);
        }
        .btn-submit {
            background-color: #0047AB;
            color: #ffffff;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #003a8d;
        }
        .dropdown-container {
            display: flex;
            align-items: center;
        }
        .dropdown-container .dropdown {
            margin-left: 15px;
        }
        .dropdown-menu {
            min-width: 150px;
        }
        .dropdown-item i {
            margin-right: 8px;
        }
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div style="display: flex; align-items: center;">
            <img src="{{ asset('images/senantiasa BCA.jpg') }}" alt="BCA Logo">
            <span>Admin Panel</span>
        </div>
        <div class="dropdown-container">
            <span><span class="badge bg-warning"></span></span>
            <!-- Dropdown for Logout -->
            <div class="dropdown ms-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="roleDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="roleDropdown">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Registrasi Data Project</h2>
        <div class="form-container">
            <form action="{{ route('simpanproject') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namaproject">Nama Project*</label>
                    <input type="text" id="namaproject" name="namaproject" placeholder="Nama Project" required>
                </div>
                <div class="form-group">
                    <label for="statusproject">Status Project *</label>
                    <div class="form-check">
                        <input type="radio" id="statusproject_available" name="statusproject" value="Available" class="form-check-input" checked>
                        <label for="statusproject_available" class="form-check-label">Available</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="statusproject_not_available" name="statusproject" value="Not Available" class="form-check-input">
                        <label for="statusproject_not_available" class="form-check-label">Not Available</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="anggotatim">Anggota Tim*</label>
                    <input type="text" id="anggotatim" name="anggotatim" placeholder="Anggota Tim" required>
                </div>
                <div class="form-group">
                    <label for="picproject">PIC Project*</label>
                    <input type="text" id="picproject" name="picproject" placeholder="PIC Project" required>
                </div>
                <div class="form-group">
                    <label for="start">Start Project*</label>
                    <input type="date" id="start" name="start" placeholder="Start Project" required>
                </div>
                <div class="form-group">
                    <label for="end">End Project*</label>
                    <input type="date" id="end" name="end" placeholder="End Project" required>
                </div>
                <button type="submit" class="btn-submit">Save</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
