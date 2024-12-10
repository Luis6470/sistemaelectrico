<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio

// Verifica si el formulario fue enviado
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id_usuario = $_POST['id_usuario'];
    
    // Preparar la consulta SQL
    $stmt = $pdo->prepare("DELETE FROM USUARIOS WHERE id_usuario = :id_usuario");

    // Vincular parámetros
    $stmt->bindParam(':id_usuario', $id_usuario);

    try {
        $stmt->execute();
        $_SESSION['mensaje'] = "Elimacion exitosa";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/usuarios');  
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

  
?>
