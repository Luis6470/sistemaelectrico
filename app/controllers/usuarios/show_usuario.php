<?php
$id_usuario_get = $_GET['id'];

$sql = " SELECT u.id_usuario, u.nombre, u.email, p.descripcion
        FROM usuarios u 
        INNER JOIN parametro p ON u.id_parametro_nivel = p.id_parametro WHERE id_usuario = '$id_usuario_get'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row){
   $nombre = $row['nombre'];
    $email = $row['email'];
    $descripcion= $row['descripcion'];
}
?>