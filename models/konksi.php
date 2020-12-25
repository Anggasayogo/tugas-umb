<?php

$host = '127.0.0.1';
$username = 'root';
$pass = '';
$db = 'tugas';
$conection = mysqli_connect($host, $username, $pass, $db);
if (!$conection) {
    echo "Databse Not Conected";
    die;
}
