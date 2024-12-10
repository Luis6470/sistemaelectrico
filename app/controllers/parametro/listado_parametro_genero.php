<?php
$sql = "SELECT id_parametro, descripcion 
FROM parametro 
WHERE descripcion IN ('masculino', 'femenino')"; 
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>