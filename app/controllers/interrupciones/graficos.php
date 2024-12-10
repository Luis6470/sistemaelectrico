<?php
// Conexión a la base de datos
//include('../../config.php');

// Consulta para contar interrupciones por mes
$sql = "SELECT MONTH(fecha_registro) AS mes, COUNT(*) AS total
          FROM interrupcion
          GROUP BY MONTH(fecha_registro)";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultg = $stmt->fetchAll(PDO::FETCH_ASSOC);

$data = [];
$labels = [];
if ($resultg) {
    foreach ($resultg as $row) {
        $labels[] = date('F', mktime(0, 0, 0, $row['mes'], 10)); // Convertir número de mes a nombre
        $data[] = $row['total'];
    }
}
?>
