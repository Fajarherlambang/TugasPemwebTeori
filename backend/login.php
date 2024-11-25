<?php

require './../config/db.php';

if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mendapatkan user berdasarkan email
    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
    
    if(mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        
        // Verifikasi password
        if(password_verify($password, $data['password'])) {
            // Redirect ke dashboard.php
            session_start();
            $_SESSION['user_id'] = $data['id']; // Simpan ID user ke session
            $_SESSION['user_name'] = $data['name']; // Simpan nama user ke session
            header("Location: ../dashboard.php");
            exit;
        } else {
            echo "Password salah";
            exit;
        }
    } else {
        echo "Email atau password salah";
        exit;
    }
}
?>
