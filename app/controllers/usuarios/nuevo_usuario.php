<?php
include('../../config.php');
session_start();  // Inicia la sesión al principio

// Verifica si el formulario fue enviado
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$id_parametro_genero = $_POST['id_parametro_genero'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat= $_POST['password_repeat'];
$id_parametro_nivel = $_POST['id_parametro_nivel'];
$id_parametro_turno = $_POST['id_parametro_turno'];
$estado_usuario = $_POST['estado_usuario'];
$fechaHora = date("Y-m-d H:i:s");  // Define la fecha y hora actual

// Validar que las contraseñas coincidan
if ($password_user === $password_repeat) {
    // Encriptar la contraseña
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);

    // Preparar la consulta SQL
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, apellidos, direccion, telefono, dni, id_parametro_genero, email, password_user, id_parametro_nivel, id_parametro_turno, estado_usuario, fecha_registro) 
                                        VALUES (:nombre, :apellidos, :direccion, :telefono, :dni, :id_parametro_genero, :email, :password_user, :id_parametro_nivel,:id_parametro_turno, :estado_usuario, :fecha_registro)");

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
    $stmt->bindParam(':fecha_registro', $fechaHora);

    // Ejecutar la consulta
    try {
        $stmt->execute();
        $_SESSION['mensaje'] = "Registro exitoso";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/usuarios/crear.php');  
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    $_SESSION['mensaje'] = "Las contraseñas no coinciden";
   $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/usuarios/crear.php');  
}
?>
