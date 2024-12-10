<?php
include('../../config.php');
session_start();  // Inicia la sesión al principio

// Verifica si el formulario fue enviado
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$estado_parametro = $_POST['estado_parametro'];
$fechaHora = date("Y-m-d H:i:s");  // Define la fecha y hora actual




    // Preparar la consulta SQL
    $stmt = $pdo->prepare("INSERT INTO parametro (descripcion, tipo, estado_parametro, fecha_registro) 
                                        VALUES (:descripcion, :tipo, :estado_parametro, :fecha_registro)");

    // Vincular parámetros
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':tipo', $tipo);
    
    $stmt->bindParam(':estado_parametro', $estado_parametro);
    $stmt->bindParam(':fecha_registro', $fechaHora);

    // Ejecutar la consulta
    if   ($stmt->execute()){
        $_SESSION['mensaje'] = "Registro exitoso";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/parametro/create.php');  
    } else  {
        

    $_SESSION['mensaje'] = "Error";
   $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/parametro/create.php');  
   }
?>
