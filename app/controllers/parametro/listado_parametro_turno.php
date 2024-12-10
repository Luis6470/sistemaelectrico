<?php
$sql = "SELECT id_parametro, descripcion 
FROM parametro 
WHERE descripcion IN ('diurno', 'nocturno')";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result3 = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>