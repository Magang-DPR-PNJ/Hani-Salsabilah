<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Magang</title>
    <style>
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
            height: 80px;
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
            margin-left: 250px;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
        }
        .form-container {
            width: 100%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            width: 100%;
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
        .form-group input[type="submit"], .next-button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
        }
        .form-group input[type="submit"]:hover, .next-button:hover {
            background-color: #218838;
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
    <a href="form_magang.php" class="active">Biodata</a>
    <img src="berkas1.png" alt="Dokumen Upload">
    <a href="upload_magang.php">Dokumen Upload</a>
    <img src="informasi.png" alt="Status">
    <a href="upload_magang.php">Status</a>
</div>

<div class="container">
    <h2>Pendaftaran Magang (Biodata)</h2>
    <form action="proses_pendaftaran.php" method="post" class="form-container">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <input type="text" id="agama" name="agama" required>
        </div>
        <div class="form-group">
            <label for="jenjang">Jenjang (D3/S1/S2/S3):</label>
            <input type="text" id="jenjang" name="jenjang" required>
        </div>
        <div class="form-group">
            <label for="magang_wajib">Magang Wajib/Optional:</label>
            <input type="text" id="magang_wajib" name="magang_wajib" placeholder="Masuk KRS/Tidak Masuk KRS" required>
        </div>
        <div class="form-group">
            <label for="asal_pt">Asal Perguruan Tinggi:</label>
            <input type="text" id="asal_pt" name="asal_perguruan_tinggi" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" required>
        </div>
        <div class="form-group">
            <label for="tanggal_pengajuan">Tanggal Pengajuan:</label>
            <input type="date" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
        </div>
        <div class="form-group">
            <label for="tanggal_selesai">Tanggal Selesai:</label>
            <input type="date" id="tanggal_selesai" name="tanggal_selesai" required>
        </div>
        <div class="form-group">
            <label for="nomor_hp">Nomor HP/WA:</label>
            <input type="text" id="nomor_hp" name="nomor_hp" required>
        </div>
        <div class="form-group">
            <label for="bagian_pkl">Bagian Pengajuan Magang:</label>
            <input type="text" id="bagian_pkl" name="bagian_pkl" required>
        </div>
        <div class="form-group">
            <label for="nomor_surat">Nomor Surat Pengantar:</label>
            <input type="text" id="nomor_surat" name="nomor_surat_pengantar" required>
        </div>
        <div class="form-group">
            <label for="tanggal_surat">Tanggal Surat Pengantar:</label>
            <input type="date" id="tanggal_surat" name="tanggal_surat_pengantar" required>
        </div>
        <div class="form-group">
            <label for="jabatan_penandatangan">Jabatan Penandatangan Surat Pengantar:</label>
            <input type="text" id="jabatan_penandatangan" name="jabatan_penandatangan" required>
        </div>
        <div class="form-group">
            <label for="alamat_instansi">Alamat Instansi:</label>
            <input type="text" id="alamat_instansi" name="alamat_instansi" required>
        </div>
        
        <!-- Tombol Save -->
        <div class="form-group">
            <input type="submit" value="Save">
        </div>

        <!-- Tombol Next -->
        <a href="upload_magang.php" class="next-button">Next</a>
    </form>
</div>

</body>
</html>
