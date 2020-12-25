<?php

include "../models/konksi.php";
session_start();

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $query = mysqli_query($conection, "SELECT * FROM users JOIN roles ON users.id_role=roles.id_role WHERE username='$username' ");
    $check = mysqli_fetch_row($query);

    var_dump($check);
    die;

    if ($check) {
        if ($check[1] === $username) {
            if ($check[2] === $password) {
            } else {
                echo "<script>alert('Akun Mungkin Belum Terdaftar')</script>";
                echo "<script> location='../index.php'; </script>";
            }
        } else {
            echo "<script>alert('Akun Mungkin Belum Terdaftar')</script>";
            echo "<script> location='../index.php'; </script>";
        }
    } else {
        echo "<script>alert('Akun Mungkin Belum Terdaftar')</script>";
        echo "<script> location='../index.php'; </script>";
    }
}
