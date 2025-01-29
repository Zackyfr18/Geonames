<?php
$host = "localhost";
$user = "root";  // Ganti dengan user MySQL Anda
$pass = "";      // Ganti dengan password MySQL Anda
$dbname = "geonames";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>