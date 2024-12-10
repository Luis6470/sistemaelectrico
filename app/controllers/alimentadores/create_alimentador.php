<?php
include('../../config.php');
session_start();  // Inicia la sesión al principio

// Verifica si el formulario fue enviado
$codigo = $_POST['codigo'];
$marca = $_POST['marca'];
$nivel_tension= $_POST['nivel_tension'];
$zona = $_POST['zona'];
$id_usuario = $_POST['id_usuario'];
$id_subestacion = $_POST['id_subestacion'];
$estado_alimentador = $_POST['estado_alimentador'];

$fechaHora = date("Y-m-d H:i:s");  // Define la fecha y hora actual




    // Preparar la consulta SQL
    $stmt = $pdo->prepare("INSERT INTO alimentadores (codigo, marca, nivel_tension, zona, id_usuario, id_subestacion, estado_alimentador, fecha_registro)
     VALUES (:codigo, :marca, :nivel_tension, :zona, :id_usuario, :id_subestacion, :estado_alimentador,:fecha_registro)");
                                    

    // Vincular parámetros
    $stmt->bindParam(':codigo', $codigo);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':nivel_tension', $nivel_tension);
    $stmt->bindParam(':zona', $zona);
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->bindParam(':id_subestacion', $id_subestacion);
    $stmt->bindParam(':estado_alimentador', $estado_alimentador);
    $stmt->bindParam(':fecha_registro', $fechaHora);

    // Ejecutar la consulta
    if   ($stmt->execute()){
        $_SESSION['mensaje'] = "Registro exitoso";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/alimentadores/create.php');  
    } else  {
        

    $_SESSION['mensaje'] = "Error";
   $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/alimentadores/create.php');  
   }
?>
