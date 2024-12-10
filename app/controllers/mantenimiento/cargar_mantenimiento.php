<?php

$id_mantenimiento_get= $_GET['id'];

$sql = " SELECT *, m.fecha_registro, a.codigo , a.zona, s.nombre as nombre_subestacion, u.email, u.nombre, u.apellidos,
concat(u.nombre,' ',u.apellidos) as nombre_usuario, concat(sc.nombre_suc,' ',sc.apellidos_suc) as nombre_supercco
        
       FROM mantenimiento m INNER JOIN interrupcion i ON m.id_interrupcion = i.id_interrupcion
       INNER JOIN alimentadores a on m.id_alimentador= a.id_alimentador
       INNER JOIN subestacion s on s.id_subestacion = a.id_subestacion 
       INNER JOIN usuarios u on u.id_usuario = m.id_usuario
       INNER JOIN supervisorcco sc on sc.id_supervisorcco = m.id_supervisorcco
       WHERE m.id_mantenimiento = '$id_mantenimiento_get'";       


$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultam = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Convertir al formato correcto





foreach($resultam as $row){
    $id_mantenimiento = $row['id_mantenimiento'];
    $id_alimentador = $row['id_alimentador'];
    $codigo = $row['codigo'];
    $zona = $row['zona'];
    $nombre_subestacion = $row['nombre_subestacion'];
    $marca = $row['marca'];
    $email = $row['email'];
    $nivel_tension = $row['nivel_tension'];
    $nombre_usuario = $row['nombre_usuario'];
    $estado_alimentador = $row['estado_alimentador'];
    $nombre_suc = $row['nombre_suc'];
    $apellidos_suc = $row['apellidos_suc'];
    $email_suc = $row['email_suc'];
    $celular_suc = $row['celular_suc'];
    $empresa_suc = $row['empresa_suc'];
    $estado_supervisorcco = $row['estado_supervisorcco'];
    $codigo_man= $row['codigo_man'];
    $hora_inicio = $row['hora_inicio'];
    $hora_fin = $row['hora_fin'];
    $duracion = $row['duracion'];
    $fecha_registro = $row['fecha_registro'];
    $descripcion = $row['descripcion'];
    $responsable = $row['responsable'];
    $tipo_mantenimiento = $row['tipo_mantenimiento'];
    $estado_mantenimiento = $row['estado_mantenimiento'];
    
     

}



?>
