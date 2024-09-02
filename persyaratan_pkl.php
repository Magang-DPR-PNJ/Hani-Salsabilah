<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persyaratan Magang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
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
        .content {
            margin-left: 250px;
            padding: 40px;
            background-color: white;
            min-height: 100vh;
        }
        .content h1 {
            color: #333;
        }
        .content ul {
            list-style-type: decimal;
            padding-left: 20px;
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
    <a href="#"class="active">Dokumen Persyaratan</a>
    <img src="person1.png" alt="Person">
    <a href="form_magang.php">Biodata</a>
    <img src="berkas1.png" alt="Dokumen Upload">
    <a href="upload_magang.php">Dokumen Upload</a>
    <img src="informasi.png" alt="Status">
    <a href="upload_magang.php">Status</a>
</div>
    <div class="content">
        <h1>Persyaratan Praktik Kerja Lapangan</h1>
        <ul>
            <li>Surat pengantar dari Sekolah yang ditujukan kepada: Kepala Pusat Pendidikan dan Pelatihan Setjen DPR RI (berisi tentang tujuan magang, dan pemilihan topik magang);</li>
            <li>Curriculum Vitae (Daftar Riwayat Hidup);</li>
            <li>Pas Foto berlatar merah dengan ukuran 2x3 sebanyak 2 lembar;</li>
            <li>Fotocopy KTM dan KTP;</li>
        </ul>

        <!-- Tombol Next -->
        <a href="form_pkl.php" class="next-button">Next</a>

    </div>
</body>
</html>
