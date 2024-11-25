<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="width: 400px;">
            <div class="card-body">
                <h1 class="text-center mb-4 text-primary">Register</h1>
                <form action="./backend/register.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="confirm" class="form-control" id="confirm" placeholder="Konfirmasi password Anda" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100">Daftar</button>
                </form>
                <p class="text-center mt-3">
                    Sudah punya akun? <a href="index.php" class="text-decoration-none text-primary">Login</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
