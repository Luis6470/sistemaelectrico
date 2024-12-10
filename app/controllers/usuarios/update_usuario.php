<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio

// Verifica si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $dni = $_POST['dni'];
    $id_parametro_genero = $_POST['id_parametro_genero'];
    $email = $_POST['email'];
    $password_user = $_POST['password_user'];
    $password_repeat = $_POST['password_repeat'];
    $id_parametro_nivel = $_POST['id_parametro_nivel'];
    $id_parametro_turno = $_POST['id_parametro_turno'];
    $estado_usuario = $_POST['estado_usuario'];
    $id_usuario = $_POST['id_usuario'];
    //$fechaHora = date("Y-m-d H:i:s"); // Define la fecha de actualización actual

    // Validar que las contraseñas coincidan
    if ($password_user === $password_repeat) {
        // Encriptar la contraseña
        $password_user = password_hash($password_user, PASSWORD_DEFAULT);

        // Preparar la consulta SQL
        $stmt = $pdo->prepare("UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, direccion = :direccion, 
            telefono = :telefono, dni = :dni, id_parametro_genero = :id_parametro_genero, 
            email = :email, password_user = :password_user, id_parametro_nivel = :id_parametro_nivel, id_parametro_turno = :id_parametro_turno,
            estado_usuario = :estado_usuario, fecha_actualizacion = :fecha_actualizacion
            WHERE id_usuario = :id_usuario");

        // Vincular parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':id_parametro_genero', $id_parametro_genero);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password_user', $password_user);
        $stmt->bindParam(':id_parametro_nivel', $id_parametro_nivel);
        $stmt->bindParam(':id_parametro_turno', $id_parametro_turno);
        $stmt->bindParam(':estado_usuario', $estado_usuario);
        $stmt->bindParam(':fecha_actualizacion', $fechaHora);
        $stmt->bindParam(':id_usuario', $id_usuario);

        // Ejecutar la consulta
        try {
            $stmt->execute();
            $_SESSION['icono'] = "success";
            $_SESSION['mensaje'] = "Actualización exitosa";
            header('Location: '.$URL.'/usuarios/update.php?id='.$id_usuario); 
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        $_SESSION['mensaje'] = "Las contraseñas no coinciden";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/usuarios/update.php?id='.$id_usuario); 
    }
}
?>
