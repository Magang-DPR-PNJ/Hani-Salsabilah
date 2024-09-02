<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Option Selection</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
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
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
        }

        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Select an Option</h2>
        <form method="POST" action="">
            <button type="submit" name="option" value="users">Users</button>
            <button type="submit" name="option" value="kendaraan">Kendaraan</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['option'])) { // Check if 'option' is set
            if ($_POST['option'] === 'users') {
                header('Location: index_users.php');
            } elseif ($_POST['option'] === 'kendaraan') {
                header('Location: index_kendaraan.php');
            }
        }
    }
    ?>
</body>
</html>
