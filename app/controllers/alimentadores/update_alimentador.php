<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    
    $marca = $_POST['marca'];
    $nivel_tension= $_POST['nivel_tension'];
    $zona = $_POST['zona'];
    $id_usuario = $_POST['id_usuario'];
    $id_subestacion = $_POST['id_subestacion'];
    $estado_alimentador = $_POST['estado_alimentador'];
    $id_alimentador =$_POST['id_alimentador'];
    $fechaHora = date("Y-m-d H:i:s"); // Define la fecha de actualización actual

    // Preparar la consulta SQL corregida
    $sql = "UPDATE alimentadores
            SET marca = :marca,
                nivel_tension = :nivel_tension, 
                zona = :zona,
                id_usuario = :id_usuario,
                id_subestacion = :id_subestacion,
                estado_alimentador = :estado_alimentador,   
                fecha_actualizacion = :fecha_actualizacion
            WHERE id_alimentador = :id_alimentador";

    try {
        // Preparar la consulta
        $stmt = $pdo->prepare($sql);

        // Vincular parámetros
    
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':nivel_tension', $nivel_tension);
        $stmt->bindParam(':zona', $zona);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->bindParam(':id_subestacion', $id_subestacion);
        $stmt->bindParam(':estado_alimentador', $estado_alimentador);
        $stmt->bindParam(':fecha_actualizacion', $fechaHora);
        $stmt->bindParam(':id_alimentador', $id_alimentador);

        // Ejecutar la consulta
        $stmt->execute();

        // Configurar mensajes de sesión
        $_SESSION['icono'] = "success";
        $_SESSION['mensaje'] = "Actualización exitosa";

        // Redirigir al usuario
        header('Location: '.$URL.'/alimentadores/update.php?id='.$id_alimentador);
        exit;
    } catch (PDOException $e) {
        // Manejo de errores
        $_SESSION['icono'] = "error";
        $_SESSION['mensaje'] = "Error en la actualización: " . $e->getMessage();
        header('Location: '.$URL.'/alimentadores/update.php?id='.$id_alimentador);
        exit;
    }
} else {
    // Redirigir en caso de acceso no válido
    $_SESSION['icono'] = "error";
    $_SESSION['mensaje'] = "Solicitud no válida.";
    header('Location: '.$URL.'/alimentadores/update.php');
    exit;
}
?>
