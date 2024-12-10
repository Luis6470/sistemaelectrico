<?php

$id_interrupcion_get= $_GET['id'];

$sql = " SELECT *, i.fecha_registro as fecha_registro, a.codigo , a.zona, s.nombre as nombre_subestacion, u.email, u.nombre, u.apellidos,concat(u.nombre,' ',u.apellidos) as nombre_usuario, concat(sc.nombre_suc,' ',sc.apellidos_suc) as nombre_supercco,
        concat(ss.nombre_sus,' ',ss.apellidos_sus) as nombre_superset
       FROM interrupcion i INNER JOIN alimentadores a on i.id_alimentador= a.id_alimentador
       INNER JOIN subestacion s on s.id_subestacion= a.id_subestacion 
       INNER JOIN usuarios u on u.id_usuario = i.id_usuario
       INNER JOIN supervisorcco sc on sc.id_supervisorcco = i.id_supervisorcco
       INNER JOIN supervisorset ss on ss.id_supervisorset = i.id_supervisorset
       WHERE i.id_interrupcion = '$id_interrupcion_get'";       


$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultai = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Convertir al formato correcto





foreach($resultai as $row){
    $id_supervisorcco = $row['id_supervisorcco'];
    $id_alimentador = $row['id_alimentador'];
    $id_interrupcion = $row['id_interrupcion'];
    $nro_interrupcion = $row['nro_interrupcion'];
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
    $nombre_sus = $row['nombre_sus'];
    $apellidos_sus = $row['apellidos_sus'];
    $email_sus = $row['email_sus'];
    $celular_sus = $row['celular_sus'];
    $empresa_sus = $row['empresa_sus'];
    $hora_inicio = $row['hora_inicio'];
    $hora_fin = $row['hora_fin'];
    $duracion = $row['duracion'];
    $estado_supervisorset = $row['estado_supervisorset'];
    $fecha_registro = $row['fecha_registro'];
    $potencia_interrumpida = $row['potencia_interrumpida'];
    $proteccion = $row['proteccion'];
    $causa = $row['causa'];
    $zona_afectada = $row['zona_afectada'];
    $estado_interrupcion = $row['estado_interrupcion'];
    $descripcion = $row['descripcion'];
     

}



?>
