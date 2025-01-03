<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $pago = $_POST['pago'];
    $interes = $_POST['interes'];
    $saldo = $_POST['saldo'];

    $sql = "INSERT INTO registros (nombre, fecha, pago, interes, saldo) VALUES ('$nombre', '$fecha', '$pago', '$interes', '$saldo')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro guardado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
