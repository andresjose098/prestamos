<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $pago = $_POST['pago'];
    $interes = $_POST['interes'];
    $saldo = $_POST['saldo'];

    $sql = "UPDATE registros SET nombre='$nombre', fecha='$fecha', pago='$pago', interes='$interes', saldo='$saldo' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}
?>
