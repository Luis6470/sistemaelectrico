<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio

// Verifica si el formulario fue enviado
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id_alimentador = $_POST['id_alimentador'];
    
    // Preparar la consulta SQL
    $stmt = $pdo->prepare("DELETE FROM alimentadores WHERE id_alimentador = :id_alimentador");

    // Vincular parámetros
    $stmt->bindParam(':id_alimentador', $id_alimentador);

    if( $stmt->execute()){
        $_SESSION['mensaje'] = "Elimacion exitosa";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/alimentadores');  
    } else {
        $_SESSION['mensaje'] = "Error";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/alimentadores');  

    }
?>
