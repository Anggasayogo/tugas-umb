<?php

include "../models/konksi.php";

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $query = mysqli_query($conection, "SELECT * FROM users WHERE username='$username' ");
    $check = mysqli_fetch_row($query);

    var_dump($check);
}
