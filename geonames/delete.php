<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $geonameid = $_POST["geonameid"];
    
    // Validasi untuk memastikan geonameid adalah angka
    if (is_numeric($geonameid)) {
        $sql = "DELETE FROM geonames WHERE geonameid='$geonameid'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil dihapus!";
        } else {
            echo "Error: " . $conn->error; // Menangani kesalahan jika penghapusan gagal
        }
    } else {
        echo "ID harus berupa angka."; // Pesan kesalahan jika ID tidak valid
    }
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: auto;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #5cb85c;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #4cae4c;
    }
</style>
<form method="post">
    ID: <input type="text" name="geonameid">
    <input type="submit" value="Hapus">
</form>

<br>
<a href="index.php" style="display: inline-block; margin-top: 10px; padding: 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">Kembali ke Index</a>
</br>

<br>
<a href="view.php" style="display: inline-block; margin-top: 10px; padding: 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">Lihat Data</a>
</br>