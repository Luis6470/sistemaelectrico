<?php
include('../../config.php');
session_start();  // Inicia la sesión al principio

// Verifica si el formulario fue enviado
$codigo_man = $_GET['codigo_man'];
$hora_inicio = $_GET['hora_inicio'];
$hora_fin = $_GET['hora_fin'];
$duracion = $_GET['duracion'];
$fecha_registro= $_GET['fecha_registro'];
$descripcion = $_GET['descripcion'];
$responsable = $_GET['responsable'];
$tipo_mantenimiento = $_GET['tipo_mantenimiento'];
$estado_mantenimiento= $_GET['estado_mantenimiento'];
$id_usuario = $_GET['id_usuario'];
$id_supervisorcco = $_GET['id_supervisorcco'];
$id_alimentador = $_GET['id_alimentador'];
$id_interrupcion = $_GET['id_interrupcion'];


$fecha_registro = date('Y-m-d', strtotime($fecha_registro));
//$fechaHora = date("d-m-Y H:i:s");  // Define la fecha y hora actual

                                    
    // Preparar la consulta SQL
    $stmt = $pdo->prepare("INSERT INTO mantenimiento (codigo_man, hora_inicio, hora_fin, duracion, fecha_registro, descripcion, 
    responsable, tipo_mantenimiento, estado_mantenimiento,  id_usuario, id_alimentador, id_supervisorcco, id_interrupcion) 
    VALUES (:codigo_man, :hora_inicio, :hora_fin, :duracion, :fecha_registro, :descripcion, :responsable, :tipo_mantenimiento,:estado_mantenimiento,
    :id_usuario,:id_alimentador, :id_supervisorcco, :id_interrupcion)");  // Prepara la consulta SQL
                                    

    // Vincular parámetros
    $stmt->bindParam(':codigo_man', $codigo_man);
    $stmt->bindParam(':hora_inicio', $hora_inicio);
    $stmt->bindParam(':hora_fin', $hora_fin);
    $stmt->bindParam(':duracion', $duracion);
    $stmt->bindParam(':fecha_registro', $fecha_registro);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':responsable', $responsable);
    $stmt->bindParam(':tipo_mantenimiento', $tipo_mantenimiento);
    $stmt->bindParam(':estado_mantenimiento', $estado_mantenimiento); 
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->bindParam(':id_alimentador', $id_alimentador);
    $stmt->bindParam(':id_supervisorcco', $id_supervisorcco);
    $stmt->bindParam(':id_interrupcion', $id_interrupcion);
   


 //   $stmt->bindParam(':fecha_registro', $fechaHora);

 if   ($stmt->execute()){
    //echo "Subestación registrada con éxito";
    $_SESSION['mensaje'] = "Registro exitoso";
    $_SESSION['icono'] = "success";
    ?>
    <script >
        location.href = "<?php echo $URL;?>/mantenimiento";
    </script>
    
    <?php
      
    } else  {
    
    
    $_SESSION['mensaje'] = "Error";
    $_SESSION['icono'] = "error";
    ?>
    <script >
        location.href = "<?php echo $URL;?>/mantenimiento";
    </script>
    
    <?php
    //header('Location: '.$URL.'/subestaciones');  
    }
    ?>