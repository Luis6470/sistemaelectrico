<?php
$sql = " SELECT u.id_usuario, u.nombre, u.email, p.descripcion
        FROM usuarios u 
        INNER JOIN parametro p ON u.id_parametro_nivel = p.id_parametro ";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
