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
            margin-left: 250px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .form-group input[type="submit"], .form-group a.next-button {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
        }
        .form-group input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }
        .form-group a.next-button {
            background-color: #506FD9;
            color: white;
        }
        .form-group a.next-button:hover {
            background-color: #4051A4;
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
    <a href="persyaratan_pkl.php">Dokumen Persyaratan</a>
    <img src="person1.png" alt="Person">
    <a href="form_magang.php" class="active">Biodata</a>
    <img src="berkas1.png" alt="Dokumen Upload">
    <a href="upload_magang.php">Dokumen Upload</a>
    <img src="informasi.png" alt="Status">
    <a href="upload_magang.php">Status</a>
</div>

<div class="container">
    <h2>Pendaftaran Praktik Kerja Lapangan (Biodata)</h2>
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
            <label for="jenjang">Jenjang:</label>
            <input type="text" id="jenjang" name="jenjang" required>
        </div>
        <div class="form-group">
            <label for="asal_pt">Asal Sekolah/PT/Organisasi:</label>
            <input type="text" id="asal_pt" name="asal_pt" required>
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
            <label for="bagian_magang">Bagian Pengajuan Magang:</label>
            <input type="text" id="bagian_magang" name="bagian_magang" required>
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
        <div class="form-group">
            <input type="submit" value="Save">
        </div>
    </form>
    
    <div class="form-group">
        <a href="upload_pkl.php" class="next-button">Next</a>
    </div>
</div>

</body>
</html>
