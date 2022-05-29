<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_km";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if(!$koneksi) {
    die("Tidak bisa terkoneksi ke database");
}

?>