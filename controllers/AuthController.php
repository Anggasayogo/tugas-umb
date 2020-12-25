<?php

include "../models/konksi.php";
session_start();

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (!$username || !$password) {
        echo "<script>alert('Field Tidak boleh Kosong')</script>";
        echo "<script> location='../index.php'; </script>";
    }

    $query = mysqli_query(
        $conection,
        "SELECT * FROM users JOIN roles ON users.id_role=roles.id_role WHERE username='$username' "
    );
    $check = mysqli_fetch_row($query);

    if ($check) {
        if ($check[2] === $password) {

            $_SESSION['role_name'] = $check[5];
            $_SESSION['id_role'] = $check[4];

            echo "<script>alert('SuccessLogin')</script>";
            echo "<script> location='../index.php'; </script>";
        } else {
            echo "<script>alert('Password Salah/Tidak Diketahui')</script>";
            echo "<script> location='../index.php'; </script>";
        }
    } else {
        echo "<script>alert('Username Anda Salah/Tidak diketahui')</script>";
        echo "<script> location='../index.php'; </script>";
    }
}
