<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 bg-light border-end vh-100">
                <h5 class="text-center mt-3">Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Analytics</a>
                    </li>
                </ul>
            </div>
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10">
                <div class="container">
                    <h1 class="mt-4">Selamat Datang, Admin</h1>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Users</h5>
                                    <p class="card-text">Total: 150</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Reports</h5>
                                    <p class="card-text">Total: 75</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Revenue</h5>
                                    <p class="card-text">$12,300</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
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
