<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $geonameid = $_POST["geonameid"];
    $name = $_POST["name"];
    $asciiname = $_POST["asciiname"];
    $alternatenames = $_POST["alternatenames"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $feature_class = $_POST["feature_class"];
    $feature_code = $_POST["feature_code"];
    $country_code = $_POST["country_code"];
    $cc2 = $_POST["cc2"];
    $admin1_code = $_POST["admin1_code"];
    $admin2_code = $_POST["admin2_code"];
    $admin3_code = $_POST["admin3_code"];
    $admin4_code = $_POST["admin4_code"];
    $population = $_POST["population"];
    $elevation = $_POST["elevation"];
    $dem = $_POST["dem"];
    $timezone = $_POST["timezone"];
    $modification_date = $_POST["modification_date"];

    $sql = "INSERT INTO geonames (geonameid, name, asciiname, alternatenames, latitude, longitude, feature_class, feature_code, country_code, cc2, admin1_code, admin2_code, admin3_code, admin4_code, population, elevation, dem, timezone, modification_date)
            VALUES ('$geonameid', '$name', '$asciiname', '$alternatenames', '$latitude', '$longitude', '$feature_class', '$feature_code', '$country_code', '$cc2', '$admin1_code', '$admin2_code', '$admin3_code', '$admin4_code', '$population', '$elevation', '$dem', '$timezone', '$modification_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php
// ... existing code ...
?>

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
    h2 {
        text-align: center;
        color: #333;
    }
    label {
        display: block;
        margin: 10px 0 5px;
    }
    input[type="text"], input[type="date"], input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #5cb85c;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #4cae4c;
    }
</style>

<div class="container">
    <h2>Tambah Data Geonames</h2>
    <form method="post">
        <label for="geonameid">Geoname ID:</label>
        <input type="text" name="geonameid" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="asciiname">ASCII Name:</label>
        <input type="text" name="asciiname" required>

        <label for="alternatenames">Alternate Names:</label>
        <input type="text" name="alternatenames">

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" required>

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" required>

        <label for="feature_class">Feature Class:</label>
        <input type="text" name="feature_class" required>

        <label for="feature_code">Feature Code:</label>
        <input type="text" name="feature_code" required>

        <label for="country_code">Country Code:</label>
        <input type="text" name="country_code" required>

        <label for="population">Population:</label>
        <input type="text" name="population">

        <label for="elevation">Elevation:</label>
        <input type="text" name="elevation">

        <label for="dem">DEM:</label>
        <input type="text" name="dem">

        <label for="timezone">Timezone:</label>
        <input type="text" name="timezone">

        <label for="modification_date">Modification Date:</label>
        <input type="date" name="modification_date">

        <input type="submit" value="Tambah Data">
    </form>
</div>


