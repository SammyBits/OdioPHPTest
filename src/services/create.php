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

 // Proceso de creación de un nuevo usuario si se ha enviado el formulario
 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO Users (Username, Password, Role) VALUES ('$name', '$password', '$role)";
    if ($conn->query($sql) === TRUE) {
        // Redirigir al usuario a una nueva página después de realizar la inserción
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
