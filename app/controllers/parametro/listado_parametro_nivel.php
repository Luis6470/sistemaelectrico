<?php
$sql = " SELECT id_parametro, descripcion 
FROM parametro 
WHERE descripcion IN ('supervisor', 'operador')";

$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$result1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>