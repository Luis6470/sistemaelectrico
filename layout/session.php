<?php

session_start();

if (isset($_SESSION['sesion_email'])) {
    //echo "Si existe sesión de " . htmlspecialchars($_SESSION['session_email']);

    $email_sesion = $_SESSION['sesion_email'];
    
    // Usar declaraciones preparadas para prevenir inyección SQL
    $sql = " SELECT u.id_usuario, u.nombre,u.apellidos, u.direccion, u.telefono,u.dni, u.id_parametro_genero, u.email, u.password_user,u.id_parametro_nivel,u.id_parametro_turno, u.estado_usuario, p.descripcion
        FROM usuarios u 
        INNER JOIN parametro p ON u.id_parametro_nivel = p.id_parametro
            WHERE email = '$email_sesion'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($result as $row){
     $id_usuario_sesion = $row['id_usuario'];
     $nombre_sesion = $row['nombre'];
     $descripcion_sesion = $row ['descripcion'];
 
    }
    }else {
    echo "No existe sesión";
    header('Location: ' . $URL . '/login');
    exit();
    }

?>
