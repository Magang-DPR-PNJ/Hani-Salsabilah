<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran PKL</title>
    <style>
        /* Your existing CSS with additional styles for submit button */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: linear-gradient(to bottom, #71706D, #506FD9);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
        }
        .sidebar img {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
        }
        .sidebar h3 {
            margin-bottom: 30px;
        }
        .sidebar a {
            text-decoration: none;
            color: white;
            width: 100%;
            padding: 15px;
            text-align: center;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar a.active {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .container {
            flex: 1;
            padding: 20px;
            margin-left: 250px; /* Disesuaikan dengan lebar sidebar */
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .upload-section {
            margin-bottom: 30px;
        }
        .upload-box {
            width: calc(100% - 20px); /* Full width minus padding */
            max-width: 100%; /* Ensure it doesn’t exceed the container’s width */
            height: 150px; /* Adjust height if needed */
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            position: relative;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto; /* Center the box within its container */
        }
        .upload-button {
            background-color: #ccc;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            position: absolute;
            bottom: 10px; /* Posisikan di bawah */
            right: 10px;  /* Posisikan di kanan */
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input[type="submit"] {
            background-color: #506FD9; /* Warna senada dengan sidebar */
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .form-group input[type="submit"]:hover {
            background-color: #4051A4; /* Warna lebih gelap saat hover */
        }

        .next-button {
            display: block;
            width: 150px;
            margin: 40px auto 0;
            padding: 10px;
            background-color: #506FD9;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .next-button:hover {
            background-color: #3a4ca8;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <img src="logo.png" alt="Logo">
    <h3>SMART</h3>
    <img src="pendaftaran.png" alt="Pendaftaran">
    <a href="regis.php">Pendaftaran</a>
    <img src="persyaratan.png" alt="Persyaratan">
    <a href="persyaratan_magang.php">Dokumen Persyaratan</a>
    <img src="person1.png" alt="Person">
    <a href="form_magang.php">Biodata</a>
    <img src="berkas1.png" alt="Dokumen Upload">
    <a href="upload_magang.php" class="active">Dokumen Upload</a>
    <img src="informasi.png" alt="Status">
    <a href="upload_magang.php">Status</a>
</div>


<div class="container">
    <h2>Upload Dokumen Magang</h2>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <?php
        // Array untuk menyimpan judul form upload dan input name masing-masing
        $documents = [
            "Surat Pengantar dari Perguruan Tinggi" => "surat_pengantar",
            "Kartu Rencana Studi" => "krs",
            "Transkip Nilai" => "nilai",
            "Curriculum Vitae (Daftar Riwayat Hidup)" => "cv",
            "Pas Foto Berlatar Merah" => "foto",
            "KTP dan Kartu Mahasiswa" => "KTP",
            "Motivation Letter" => "motivation_letter",
        ];

        foreach ($documents as $title => $name) {
            ?>
            <div class="upload-section">
                <h3><?php echo $title; ?></h3>
                <div class="upload-box">
                    <input type="file" name="<?php echo $name; ?>" class="upload-button">
                </div>
            </div>
            <?php
        }
        ?>
        <div class="form-group">
            <input type="submit" value="Save">
        </div>
    </form>

    <a href="status_magang.php" class="next-button">Next</a>
</div>

</body>
</html>
