<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART - Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .container {
            display: flex;
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
            flex-grow: 1;
            padding: 50px;
            background-color: white;
            box-shadow: none;
            margin: 20px;
            border-radius: 10px;
            margin-left: 270px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            font-size: 1em;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"], input[type="email"], input[type="password"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4e73df;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            width: auto;
            display: block;
            margin: 0 auto;
        }

        input[type="submit"]:hover {
            background-color: #375a7f;
        }

        .show-password {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .show-password input {
            margin-right: 5px;
        }
    </style>
    <script>
        function setFormAction() {
            var kategori = document.getElementById("kategori").value;
            var form = document.getElementById("registrationForm");

            if (kategori === "Praktik Kerja Lapangan") {
                form.action = "persyaratan_pkl.php";
            } else if (kategori === "Magang") {
                form.action = "persyaratan_magang.php";
            } else if (kategori === "Penelitian") {
                form.action = "persyaratan_penelitian.php";
            } else {
                form.action = "#"; // Jika tidak ada kategori yang dipilih
            }
        }

        function validateForm() {
            var password = document.getElementById("password").value;
            var repassword = document.getElementById("repassword").value;

            if (password !== repassword) {
                alert("Password dan Re-Password harus sama!");
                return false; // Mencegah form dikirimkan
            }

            return true; // Mengizinkan form dikirimkan jika validasi berhasil
        }
    </script>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <img src="logo.png" alt="Logo">
        <h3>SMART</h3>
        <img src="pendaftaran.png" alt="Pendaftaran">
        <a href="#" class="active">Pendaftaran</a>
        <img src="persyaratan.png" alt="Persyaratan">
        <a href="#">Dokumen Persyaratan</a>
        <img src="person1.png" alt="Person">
        <a href="#">Biodata</a>
        <img src="berkas1.png" alt="Dokumen Upload">
        <a href="#">Dokumen Upload</a>
        <img src="informasi.png" alt="Status">
        <a href="#">Status</a>
    </div>

    <div class="content">
        <h2>Registrasi</h2>
        <form id="registrationForm" method="POST" onsubmit="setFormAction(); return validateForm();">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="Praktik Kerja Lapangan">Praktik Kerja Lapangan</option>
                <option value="Magang">Magang</option>
                <option value="Penelitian">Penelitian</option>
            </select>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="repassword">Re-Password</label>
            <input type="password" id="repassword" name="repassword" required>

            <input type="submit" value="Register">
        </form>
    </div>
</div>
</body>
</html>
