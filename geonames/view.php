<?php
include 'config.php';

$sql = "SELECT name, asciiname, alternatenames, latitude, longitude, feature_class, feature_code, country_code, cc2, admin1_code, admin2_code, admin3_code, admin4_code, population, elevation, dem, timezone, modification_date FROM geonames";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
                font-size: 18px;
                text-align: left;
            }
            th, td {
                padding: 12px;
                border: 1px solid #ddd;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            tr:hover {
                background-color: #ddd;
            }
          </style>";
    
    echo "<table>";
    echo "<tr><th>Name</th><th>Ascii Name</th><th>Alternate Names</th><th>Latitude</th><th>Longitude</th><th>Feature Class</th><th>Feature Code</th><th>Country Code</th><th>CC2</th><th>Admin1 Code</th><th>Admin2 Code</th><th>Admin3 Code</th><th>Admin4 Code</th><th>Population</th><th>Elevation</th><th>DEM</th><th>Timezone</th><th>Modification Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["asciiname"]."</td><td>".$row["alternatenames"]."</td><td>".$row["latitude"]."</td><td>".$row["longitude"]."</td><td>".$row["feature_class"]."</td><td>".$row["feature_code"]."</td><td>".$row["country_code"]."</td><td>".$row["cc2"]."</td><td>".$row["admin1_code"]."</td><td>".$row["admin2_code"]."</td><td>".$row["admin3_code"]."</td><td>".$row["admin4_code"]."</td><td>".$row["population"]."</td><td>".$row["elevation"]."</td><td>".$row["dem"]."</td><td>".$row["timezone"]."</td><td>".$row["modification_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>