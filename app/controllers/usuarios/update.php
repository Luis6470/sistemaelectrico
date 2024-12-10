<?php
$id_usuario_get = $_GET['id'];

$sql = " SELECT u.id_usuario, u.nombre,u.apellidos, u.direccion, u.telefono,u.dni, u.id_parametro_genero, u.email, u.password_user,u.id_parametro_nivel,u.id_parametro_turno, u.estado_usuario, p.descripcion
        FROM usuarios u 
        INNER JOIN parametro p ON u.id_parametro_nivel = p.id_parametro WHERE id_usuario = '$id_usuario_get'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row){
   $nombre = $row['nombre'];
    $apellidos = $row['apellidos'];
    $direccion = $row['direccion'];
    $telefono = $row['telefono'];
    $dni= $row['dni'];
    $id_parametro_genero=$row['id_parametro_genero'];
    $email = $row['email'];
    $password_user=$row['password_user'];
    $id_parametro_nivel=$row['id_parametro_nivel'];
    $id_parametro_turno=$row['id_parametro_turno'];
    $estado_usuario=$row['estado_usuario'];
    $descripcion= $row['descripcion'];

}
?>