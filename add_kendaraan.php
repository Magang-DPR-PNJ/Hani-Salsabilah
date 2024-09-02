<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $merk_kendaraan = $_POST['merk_kendaraan'];
    $bahan_bakar = $_POST['bahan_bakar'];
    $tahun_kendaraan = $_POST['tahun_kendaraan'];

    $query = "INSERT INTO kendaraan (jenis_kendaraan, merk_kendaraan, bahan_bakar, tahun_kendaraan) VALUES ('$jenis_kendaraan', '$merk_kendaraan', '$bahan_bakar', '$tahun_kendaraan')";
    mysqli_query($koneksi, $query);

    header('Location: index_kendaraan.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f9fb;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #50A6B2;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #50A6B2;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #87D1D8;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New User</h2>   
        <form method="POST" action="">
            <div class="form-group">
                <label for="jenis_kendaraan">jenis kendaraan:</label>
                <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" required>
            </div>
            <div class="form-group">
                <label for="merk_kendaraan">merk kendaraan:</label>
                <textarea id="merk_kendaraan" name="merk_kendaraan" required></textarea>
            </div>
            <div class="form-group">
                <label for="bahan_bakar">bahan bakar:</label>
                <input type="text" id="bahan_bakar" name="bahan_bakar" required>
            </div>
            <div class="form-group">
                <label for="tahun_kendaraan">tahun kendaraan:</label>
                <input type="text" id="tahun_kendaraan" name="tahun_kendaraan" required>
            </div>
            <button type="submit" name="submit">Save</button>
        </form>
    </div>
</body>
</html>
