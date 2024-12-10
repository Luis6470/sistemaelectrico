<?php
include('../../config.php');
session_start();  // Inicia la sesión al principio

// Verifica si el formulario fue enviado
$nro_interrupcion = $_GET['nro_interrupcion'];
$hora_inicio = $_GET['hora_inicio'];
$hora_fin = $_GET['hora_fin'];
$duracion = $_GET['duracion'];
$fecha_registro= $_GET['fecha_registro'];
$potencia_interrumpida = $_GET['potencia_interrumpida'];
$proteccion = $_GET['proteccion'];
$causa = $_GET['causa'];
$zona_afectada = $_GET['zona_afectada'];
$descripcion = $_GET['descripcion'];
$id_usuario = $_GET['id_usuario'];
$id_supervisorcco = $_GET['id_supervisorcco'];
$id_supervisorset = $_GET['id_supervisorset'];
$id_alimentador = $_GET['id_alimentador'];
$estado_interrupcion = $_GET['estado_interrupcion'];

$duracion_partes = explode(':', $duracion);
$duracion_minutos = ($duracion_partes[0] * 60) + $duracion_partes[1];

// Verificar si la duración supera los 3 minutos
if ($duracion_minutos > 3) {
    $estado_interrupcion = 'in'; // Estado inactivo
    $mantenimiento = true;
} else {
    $mantenimiento = false;
}


$fecha_registro = date('Y-m-d', strtotime($fecha_registro));
//$fechaHora = date("d-m-Y H:i:s");  // Define la fecha y hora actual

                                    
    // Preparar la consulta SQL
    $stmt = $pdo->prepare("INSERT INTO interrupcion (nro_interrupcion, hora_inicio, hora_fin, duracion, mantenimiento, fecha_registro, potencia_interrumpida, 
    causa, proteccion, zona_afectada, descripcion, id_usuario, id_supervisorset, id_alimentador, id_supervisorcco, estado_interrupcion) 
    VALUES (:nro_interrupcion, :hora_inicio, :hora_fin, :duracion, :mantenimiento, :fecha_registro, :potencia_interrumpida, :causa, :proteccion,:zona_afectada, :descripcion, :id_usuario,
    :id_supervisorset, :id_alimentador, :id_supervisorcco, :estado_interrupcion)");
                                    

    // Vincular parámetros
    $stmt->bindParam(':nro_interrupcion', $nro_interrupcion);
    $stmt->bindParam(':hora_inicio', $hora_inicio); 
    $stmt->bindParam(':hora_fin', $hora_fin);
    $stmt->bindParam(':duracion', $duracion);
    $stmt->bindParam(':mantenimiento', $mantenimiento);
    $stmt->bindParam(':fecha_registro', $fecha_registro);
    $stmt->bindParam(':potencia_interrumpida', $potencia_interrumpida);
    $stmt->bindParam(':causa', $causa);
    $stmt->bindParam(':proteccion', $proteccion);
    $stmt->bindParam(':zona_afectada', $zona_afectada);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->bindParam(':id_supervisorset', $id_supervisorset);
    $stmt->bindParam(':id_alimentador', $id_alimentador);
    $stmt->bindParam(':id_supervisorcco', $id_supervisorcco);
    $stmt->bindParam(':estado_interrupcion', $estado_interrupcion);
   


 //   $stmt->bindParam(':fecha_registro', $fechaHora);

 if   ($stmt->execute()){
    //echo "Subestación registrada con éxito";
    $_SESSION['mensaje'] = "Registro exitoso";
    $_SESSION['icono'] = "success";
    ?>
    <script >
        location.href = "<?php echo $URL;?>/interrupciones/create.php";
    </script>
    
    <?php
    //header('Location: '.$URL.'/subestaciones');  
    } else  {
    
    
    $_SESSION['mensaje'] = "Error";
    $_SESSION['icono'] = "error";
    ?>
    <script >
        location.href = "<?php echo $URL;?>/interrupciones/create.php";
    </script>
    
    <?php
    //header('Location: '.$URL.'/subestaciones');  
    }
    ?>