<?php
$servername = "localhost"; // Cambia esto si es necesario
$username = "root"; // Reemplaza con tu usuario de MySQL
$password = ""; // Reemplaza con tu contraseña
$dbname = "escuela";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido_m = $_POST['apellido_m'];
    $apellido_p = $_POST['apellido_p'];
    $escuela_procedencia = $_POST['escuela_procedencia'];
    $promedio = $_POST['promedio'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO estudiantes (nombre, apellido_m, apellido_p, escuela_procedencia, promedio, telefono, correo) VALUES ('$nombre', '$apellido_m', '$apellido_p', '$escuela_procedencia', '$promedio', '$telefono', '$correo')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso <a href='ver_estudiantes.php'>Ver estudiantes registrados</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>