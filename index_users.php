<?php
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: #f7f9fb;
            margin: 0;
            padding: 20px;
        }

        .judul {
            background: linear-gradient(135deg, #87D1D8, #50A6B2);
            padding: 20px;
            text-align: center;
            color: #fff;
            border-bottom: 4px solid #50A6B2;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 0;
        }

        a {
            color: #50A6B2;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            margin-bottom: 20px;
            display: inline-block;
            background-color: #f1f1f1;
        }

        a:hover {
            background-color: #50A6B2;
            color: #fff;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #e1e1e1;
        }

        table th {
            background-color: #50A6B2;
            color: #fff;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: #f7f9fb;
        }

        table tr:hover {
            background-color: #eaf3f7;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }

        .action-links a {
            background-color: #f1f1f1;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .action-links a:hover {
            background-color: #50A6B2;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="judul">
        <h2>Identitas</h2>
    </div>

    <a href="add_users.php">Add New User</a>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Actions</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>" . $row['pekerjaan'] . "</td>";
            echo "<td class='action-links'>
                    <a href='edit_users.php?id=" . $row['id'] . "'>Edit</a>
                    <a href='delete_users.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
