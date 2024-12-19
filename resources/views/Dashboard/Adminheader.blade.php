<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Admin Dashboard</title>
    <style>
        /* Sidebar Styling */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            background-color: #343a40;
            color: white;
            z-index: 1050;
        }
        #sidebar .nav-item .nav-link {
            color: white;
            padding: 15px;
            font-size: 16px;
            display: flex;
            align-items: center;
        }
        #sidebar .nav-item .nav-link:hover {
            background-color: #495057;
        }

        /* Main Content Section */
        #main-content {
            margin-left: 250px; /* Ensure content does not overlap with the sidebar */
           
        }

        /* Header Styling */
        .header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
            padding: 20px;
        }

        .header .navbar {
            margin-bottom: 0;
        }

        /* Table Fixes */
      

        /* Make logo circular */
        #ii {
            border-radius: 50%;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div id="sidebar">
    <div class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> 
            <img src="{{ asset('uploads/logo.png') }}" alt="" height="50" width="50" id="ii"> Admin
        </a>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ URL::to('/admin') }}"><i class="bi bi-house-door"></i> &nbsp; Dashboard</a>
        </li>

        <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="{{ URL::to('/adminProducts') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bag-check"></i> &nbsp; Our Products
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ URL::to('/adminProducts') }}"><i class="bi bi-list-ol"></i> &nbsp; View All </a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('/ourOrders') }}"><i class="bi bi-truck"></i>  &nbsp;  Orders</a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-people"></i> &nbsp; Users
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ URL::to('/ourCustomers') }}"><i class="bi bi-list-ol"></i> &nbsp; View All </a></li>
            </ul>
        </li>

    </ul>
</div>

<!-- Main Content -->
<div id="main-content">
    <!-- Header Section -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Dashboard</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('adminProfile')}}"><i class="bi bi-person-circle"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('logout') }}"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
