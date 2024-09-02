<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "percobaan"; // Replace with your database name

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
