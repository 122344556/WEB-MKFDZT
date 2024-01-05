<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mkfdzt";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("tidak berhasil terkoneksi");
}
?>