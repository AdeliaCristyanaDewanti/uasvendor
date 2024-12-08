<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Data Vendor</title>
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
            <span>Vendor Panel</span>
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
        <h2>Registrasi Data Vendor</h2>
        <div class="form-container">
            <form action="{{ route('simpanvendor') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namaperusahaan">Nama Perusahaan*</label>
                    <input type="text" id="namaperusahaan" name="namaperusahaan" placeholder="Nama Perusahaan" required>
                </div>
                <div class="form-group">
                    <label for="statusvendor">Status Vendor *</label>
                    <div class="form-check">
                        <input type="radio" id="statusvendor_available" name="statusvendor" value="Available" class="form-check-input" checked>
                        <label for="statusvendor_available" class="form-check-label">Available</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="statusvendor_not_available" name="statusvendor" value="Not Available" class="form-check-input">
                        <label for="statusvendor_not_available" class="form-check-label">Not Available</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username*</label>
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="picproject">PIC Project*</label>
                    <input type="text" id="picproject" name="picproject" placeholder="PIC Project" required>
                </div>
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="text" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak*</label>
                    <input type="text" id="kontak" name="kontak" placeholder="Kontak" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="project">Project*</label>
                    <input type="text" id="project" name="project" placeholder="Project" required>
                </div>
                <div class="form-group">
                    <label for="picvendor">PIC Vendor*</label>
                    <input type="text" id="picvendor" name="picvendor" placeholder="Picvendor" required>
                </div>
                <button type="submit" class="btn-submit">Save</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
