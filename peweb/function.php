<?php

$koneksi = mysqli_connect("localhost", "root", "", "pweb");

// login
if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($koneksi, "select * from users where username = $username and password = $password");
    $hitung = mysqli_num_rows($cekuser);

    if ($hitung > 0) {
        $ambilData = mysqli_fetch_array($cekuser);
        $role = $ambilData['role'];
        $user = $ambilData['user'];
        $_SESSION['login']= true;
        $_SESSION['role'] = $role;
        $_SESSION['user'] = $user;
        header('location: admin.php');
    } else {
        echo 'data tidak ditemukan';
    }
}


if (isset($_POST['tambahProduk'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];

    $timestamp = time();
    $namaGambar = $timestamp . '_' . $gambar;

    $dir = "assets/img/";
    $tmpFile = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $namaGambar);

    $result = mysqli_query($koneksi, "INSERT INTO products ('name', 'image', 'category', 'price') VALUES ('$nama','$namaGambar','$kategori', '$harga')");

    if ($result) {
        header("Location: admin.php");
    }
}


if (isset($_POST['editProduk'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];


    $querySelect = "SELECT * FROM products WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $querySelect);
    $result = mysqli_fetch_assoc($sqlShow);



    if ($_FILES['gambar']['name'] == "") {
        $namaGambar = $result['gambar'];
    } else {
        $gambar = $_FILES['gambar']['name'];
        unlink("assets/img/" . $result['gambar']);
        $timestamp = time();
        $namaGambar = $timestamp . '_' . $gambar;
        move_uploaded_file($_FILES['gambar']['tmp_name'], "assets/img/" . $namaGambar);
    }


    $query = "UPDATE products SET image='$namaGambar',name='$nama', category='$kategori', price='$harga' WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: admin.php");
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $querySelect = "SELECT * FROM products WHERE id = '$id'";
    $sqlShow = mysqli_query($koneksi, $querySelect);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("assets/img/" . $result['gambar']);

    $query = "DELETE FROM products WHERE id = '$id'";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) header("Location: admin.php");
}
