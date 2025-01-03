<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM registros WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}
?>
