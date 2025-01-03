<?php
include 'conexion.php';

$pagina = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1; // Página actual
$limite = 5; // Número de registros por página
$offset = ($pagina - 1) * $limite; // Calcular el offset

$sql = "SELECT * FROM registros ORDER BY id DESC LIMIT $limite OFFSET $offset";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Contar el total de registros para la paginación
$totalRegistros = $conn->query("SELECT COUNT(*) as total FROM registros")->fetch_assoc()['total'];

echo json_encode([
    'registros' => $data,
    'total' => $totalRegistros,
]);
?>
