<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$port = 3306;
$password = "123456789";
$dbname = "Test1";

$conn = mysqli_connect($servername, $username, $password, null, $port);
$conn->select_db($dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Genres";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['_GenreId'] . "'>" . $row['NameGenre'] . "</option>";
    }
} else {
    echo "";
}

mysqli_close($conn);
