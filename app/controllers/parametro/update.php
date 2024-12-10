<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $estado_parametro = $_POST['estado_parametro'];
    $id_parametro = $_POST['id_parametro'];
    $fechaHora = date("Y-m-d H:i:s"); // Define la fecha de actualización actual

    // Preparar la consulta SQL corregida
    $sql = "UPDATE parametro 
            SET descripcion = :descripcion, 
                tipo = :tipo,
                estado_parametro = :estado_parametro, 
                fecha_actualizacion = :fecha_actualizacion
            WHERE id_parametro = :id_parametro";

    try {
        // Preparar la consulta
        $stmt = $pdo->prepare($sql);

        // Vincular parámetros
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':tipo', $tipo);
        $stmt->bindParam(':estado_parametro', $estado_parametro);
        $stmt->bindParam(':fecha_actualizacion', $fechaHora);
        $stmt->bindParam(':id_parametro', $id_parametro);

        // Ejecutar la consulta
        $stmt->execute();

        // Configurar mensajes de sesión
        $_SESSION['icono'] = "success";
        $_SESSION['mensaje'] = "Actualización exitosa";

        // Redirigir al usuario
        header('Location: '.$URL.'/parametro/update.php?id='.$id_parametro);
        exit;
    } catch (PDOException $e) {
        // Manejo de errores
        $_SESSION['icono'] = "error";
        $_SESSION['mensaje'] = "Error en la actualización: " . $e->getMessage();
        header('Location: '.$URL.'/parametro/update.php?id='.$id_parametro);
        exit;
    }
} else {
    // Redirigir en caso de acceso no válido
    $_SESSION['icono'] = "error";
    $_SESSION['mensaje'] = "Solicitud no válida.";
    header('Location: '.$URL.'/parametro');
    exit;
}
?>
