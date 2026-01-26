<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaventa Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">
    <style>
        :root {
            --primary: #2d3748;
            --accent: #6366f1;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
        }
        
        body {
            background: #f9fafb;
            color: var(--text-dark);
        }
        
        .dashboard-header {
            background: var(--white);
            padding: 2rem;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
        }
        
        .dashboard-title {
            color: var(--primary);
            font-weight: 800;
            font-size: 2rem;
        }
        
        .dashboard-content {
            padding: 2rem;
        }
        
        .card {
            background: var(--white);
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
        }
        
        .card-title {
            color: var(--primary);
            font-weight: 700;
        }
        
        .btn-primary {
            background: var(--accent) !important;
            border-color: var(--accent) !important;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background: #4f46e5 !important;
            border-color: #4f46e5 !important;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background: var(--white); border-bottom: 1px solid #e5e7eb;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="color: var(--primary); font-weight: 800;">
                <i class="fas fa-calendar-check"></i> ZAVENTA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services.list') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}" style="color: var(--accent); font-weight: 600;">Dashboard</a></li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link" style="color: var(--text-light);">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div class="container-fluid">
            <h1 class="dashboard-title">Dashboard</h1>
            <p class="text-muted">Welcome back! Manage your booking system here.</p>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card p-6">
                        <div class="card-body">
                            <h5 class="card-title">You're logged in!</h5>
                            <p class="card-text text-muted">Welcome to your Zaventa dashboard. Here you can manage your services, view bookings, and grow your business.</p>
                            <a href="{{ route('services.list') }}" class="btn btn-primary">
                                <i class="fas fa-tasks"></i> View Services
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
