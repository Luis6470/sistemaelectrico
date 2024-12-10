<?php
include('../../config.php');
session_start();  // Inicia la sesión al principio

// Verifica si el formulario fue enviado
$id_interrupcion = $_GET['id_interrupcion'];
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


$fecha_registro = date('Y-m-d', strtotime($fecha_registro));
//$fechaHora = date("d-m-Y H:i:s");  // Define la fecha y hora actual


    $stmt = $pdo->prepare("UPDATE interrupcion SET 
    id_alimentador =:id_alimentador, 
    id_supervisorcco =:id_supervisorcco, 
    id_supervisorset =:id_supervisorset,
    id_usuario =:id_usuario,
    hora_inicio =:hora_inicio,
    hora_fin =:hora_fin,
    duracion =:duracion,
    fecha_registro =:fecha_registro,
    potencia_interrumpida =:potencia_interrumpida,
    proteccion =:proteccion,
    causa =:causa,
    zona_afectada =:zona_afectada,
    descripcion =:descripcion,
    estado_interrupcion =:estado_interrupcion,
    fecha_actualizacion =:fecha_actualizacion,
    nro_interrupcion =:nro_interrupcion
    WHERE id_interrupcion =:id_interrupcion");

    // Preparar la consulta SQL
    

    // Vincular parámetros
    $stmt->bindParam(':nro_interrupcion', $nro_interrupcion);
    $stmt->bindParam(':hora_inicio', $hora_inicio);
    $stmt->bindParam(':hora_fin', $hora_fin);
    $stmt->bindParam(':duracion', $duracion);
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
    $stmt->bindParam(':fecha_actualizacion', $fechaHora);
    $stmt->bindParam(':id_interrupcion', $id_interrupcion);
    
   


 //   $stmt->bindParam(':fecha_registro', $fechaHora);

 if   ($stmt->execute()){
    //echo "Subestación registrada con éxito";
    $_SESSION['mensaje'] = "Registro exitoso";
    $_SESSION['icono'] = "success";
    ?>
   
   <script>
    location.href = "<?php echo $URL; ?>/interrupciones/update.php?id=<?php echo $id_interrupcion; ?>";
   </script>


    <?php
    //header('Location: '.$URL.'/subestaciones');  
    } else  {
    
    
    $_SESSION['mensaje'] = "Error";
    $_SESSION['icono'] = "error";
    ?>
    <script>
    location.href = "<?php echo $URL; ?>/interrupciones/update.php?id=<?php echo $id_interrupcion; ?>";
    </script>

    <?php
    //header('Location: '.$URL.'/subestaciones');  
    }
    ?>