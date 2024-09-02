<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM kendaraan WHERE id=$id");

header('Location: index_kendaraan.php');
?>
