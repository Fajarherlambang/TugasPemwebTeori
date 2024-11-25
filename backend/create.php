<?php

require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    // Ambil data dari form
    $name = mysqli_real_escape_string($db_connect, $_POST['name']);
    $price = mysqli_real_escape_string($db_connect, $_POST['price']);
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Generate nama file unik
    $randomFilename = time() . '-' . md5(rand()) . '-' . $image;

    // Tentukan path penyimpanan file
    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . 'upload/';
    $uploadPath = $uploadDirectory . $randomFilename;

    // Periksa apakah direktori upload ada, jika tidak buat direktori
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Pindahkan file yang diunggah ke folder tujuan
    if (move_uploaded_file($tempImage, $uploadPath)) {
        // Masukkan data ke database
        $query = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', 'upload/$randomFilename')";
        if (mysqli_query($db_connect, $query)) {
            echo "Berhasil menyimpan produk dan mengunggah file.";
            header("Location: ../show.php");
            exit();
        } else {
            echo "Gagal menyimpan ke database: " . mysqli_error($db_connect);
        }
    } else {
        echo "Gagal mengunggah file.";
    }
}
