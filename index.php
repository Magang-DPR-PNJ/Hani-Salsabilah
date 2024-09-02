<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMART DPR RI</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Pseudo-element to add the background image */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            background-image: url('batikcoba.png'); /* Change the image path as needed */
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            opacity: 0.2; /* Set the opacity to 20% */
            z-index: -1;
        }

        header {
            position: relative; /* Required for positioning the pseudo-element */
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('batikcoba.png'); /* Add background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            opacity: 0.2; /* Set opacity to 20% */
            z-index: -1; /* Position behind header content */
        }

        /* Ensure header content stays above the pseudo-element */
        header .logo-container,
        header nav {
            position: relative;
            z-index: 1;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }
        .logo-container img {
            height: 50px;
            margin-right: 10px;
        }
        .logo-container h1 {
            font-size: 1.5em;
            color: #333;
            margin: 0;
        }
        nav {
            display: flex;
            align-items: center;
        }
        .nav-links {
            margin-right: 20px;
        }
        .nav-links a {
            margin-right: 15px;
            color: #333;
            text-decoration: none;
            font-size: 1em;
        }
        .nav-links a:hover {
            text-decoration: underline;
        }
        .login {
            background-color: #f0ad4e;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .banner {
            position: relative;
            text-align: center;
            color: white;
        }
        .banner img {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }
        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
            text-align: center;
        }
        h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
            margin-top: 40px; /* Add top margin for spacing above each heading */
        }
        .container h2:first-of-type {
            margin-top: 0; /* Remove top margin for the first heading */
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .card img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 1em;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<header>
    <div class="logo-container">
        <?php echo '<img src="logo.png" alt="Logo">'; ?>
        <?php echo '<h1>SMART DPR RI</h1>'; ?>
    </div>
    <nav>
    <div class="nav-links">
        <!-- Dropdown for Register -->
        <?php
        echo '<a href="#">Informasi</a>';
        echo '<a href="#">Kontak</a>';
        echo '<a href="#">FAQ</a>';
        ?>
    </div>
    <a href="{{ route('login') }}" class="login register">Masuk</a>
    <a href="regis.php" class="login">Register</a>
</nav>


</header>


    <div class="banner">
        <?php echo '<img src="home3.jpg" alt="Banner Image">'; ?>
        <div class="banner-text">WELCOME TO SMART DPR RI</div>
    </div>

    <div class="container">
        <h2>SMART</h2>
        <p>SMART adalah sebuah platform web yang dirancang untuk mendukung kegiatan magang, praktik kerja lapangan (PKL), dan penelitian di DPR (Dewan Perwakilan Rakyat). Melalui SMART, peserta magang dan peneliti dapat mengakses berbagai sumber daya, mengelola tugas, serta berkomunikasi dengan pembimbing. Platform ini juga menyediakan fitur untuk monitoring kemajuan proyek, mengunggah laporan, dan berkolaborasi secara efisien dalam lingkungan kerja DPR.</p>

        <h2>PRAKTIK KERJA LAPANGAN</h2>
        <div class="grid">
            <div class="card">
                <?php echo '<img src="registration.jpg" alt="Pendaftaran">'; ?>
                <p>Pendaftaran</p>
            </div>
            <div class="card">
                <?php echo '<img src="implementation.jpg" alt="Pelaksanaan">'; ?>
                <p>Pelaksanaan</p>
            </div>
            <div class="card">
                <?php echo '<img src="post.jpg" alt="Pasca Pelaksanaan">'; ?>
                <p>Pasca Pelaksanaan</p>
            </div>
        </div>

        <h2>MAGANG</h2>
        <div class="grid">
            <div class="card">
                <?php echo '<img src="registration.jpg" alt="Pendaftaran">'; ?>
                <p>Pendaftaran</p>
            </div>
            <div class="card">
                <?php echo '<img src="implementation.jpg" alt="Pelaksanaan">'; ?>
                <p>Pelaksanaan</p>
            </div>
            <div class="card">
                <?php echo '<img src="post.jpg" alt="Pasca Pelaksanaan">'; ?>
                <p>Pasca Pelaksanaan</p>
            </div>
        </div>

        <h2>PENELITIAN</h2>
        <div class="grid">
            <div class="card">
                <?php echo '<img src="registration.jpg" alt="Pendaftaran">'; ?>
                <p>Pendaftaran</p>
            </div>
            <div class="card">
                <?php echo '<img src="implementation.jpg" alt="Pelaksanaan">'; ?>
                <p>Pelaksanaan</p>
            </div>
            <div class="card">
                <?php echo '<img src="post.jpg" alt="Pasca Pelaksanaan">'; ?>
                <p>Pasca Pelaksanaan</p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Menampilkan konten
echo ob_get_clean();
?>