<?php
$servidor = "localhost";
$usuario = "root";
$clave = "larryover33";
$bd = "form";


$coneccion = mysqli_connect($servidor, $usuario, $clave, $bd);

if (!$coneccion) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['name'];
    $telefono = $_POST['phone'];
    $correo = $_POST['email'];
    $mensaje = $_POST['message'];

    $insertar = "INSERT INTO datos (nombre, correo, telefono, mensaje) 
                 VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

    if (mysqli_query($coneccion, $insertar)) {
        echo "Datos insertados correctamente.";
        header("Location: contact.html?success=true");
exit;
    } else {
        echo "Error al insertar datos: " . mysqli_error($coneccion);
    }
}
?>