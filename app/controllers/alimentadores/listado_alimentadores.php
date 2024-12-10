<?php
$sql = " SELECT *, s.nombre, u.email
        FROM alimentadores a 
        INNER JOIN subestacion s ON a.id_subestacion = s.id_subestacion
        INNER JOIN usuarios u ON u.id_usuario = a.id_usuario";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$resulta = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>