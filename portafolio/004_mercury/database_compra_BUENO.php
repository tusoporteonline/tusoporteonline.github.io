<?php
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$estado = $_POST["estado"];

$servername = "localhost";
$username = "mercuryl_root";
$password = "*8isjiHnZZk+";
$dbname = "mercuryl_compras";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO compras (email, telefono, estado)
VALUES ($email, $telefono, $estado)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>