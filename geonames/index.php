<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geonames Management</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Menambahkan favicon -->
    <meta name="description" content="Manage Geonames data easily with our user-friendly interface."> <!-- Meta tag untuk SEO -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            text-align: center;
            background-color: #5cb85c;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Geonames Management</h1>
    <a href="insert.php">Tambah Data Geonames</a>
    <a href="view.php">Lihat Data Geonames</a>
    <a href="delete.php">Hapus Data Geonames</a>
</div>

</body>
</html>