<?php

$id_alimentador_get =$_GET['id'];

$sql = " SELECT *, s.nombre, u.email, u.id_usuario
        FROM alimentadores a 
        INNER JOIN subestacion s ON a.id_subestacion = s.id_subestacion
        INNER JOIN usuarios u ON u.id_usuario = a.id_usuario WHERE id_alimentador = '$id_alimentador_get'";


$stmt = $pdo->prepare($sql);
$stmt->execute();
$resulta = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($resulta as $row){
$codigo = $row['codigo'];
$marca = $row['marca'];
$nivel_tension= $row['nivel_tension'];
$zona = $row['zona'];
$email = $row['email'];
$id_usuario = $row['id_usuario'];
$nombre = $row['nombre'];
$estado_alimentador = $row['estado_alimentador'];
}
?>
