<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio


    // Obtener datos del formulario
    $nombre = $_GET['nombre'];
    $ubicacion = $_GET['ubicacion'];
    $potencia = $_GET['potencia'];
    $estado_subestacion = $_GET['estado_subestacion'];
    $id_subestacion = $_GET['id_subestacion'];
    $fechaHora = date("Y-m-d H:i:s"); // Define la fecha de actualización actual

    // Preparar la consulta SQL
    $sql = "UPDATE subestacion 
            SET nombre = :nombre, 
                ubicacion = :ubicacion,
                potencia = :potencia,
                estado_subestacion = :estado_subestacion, 
                fecha_actualizacion = :fecha_actualizacion
            WHERE id_subestacion = :id_subestacion";

    try {
        
        $stmt = $pdo->prepare($sql);

        // Vincular parámetros
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->bindParam(':estado_subestacion', $estado_subestacion);
        $stmt->bindParam(':potencia', $potencia);
        $stmt->bindParam(':fecha_actualizacion', $fechaHora);
        $stmt->bindParam(':id_subestacion', $id_subestacion);

        // Ejecutar la consulta
        $stmt->execute();

        // Configurar mensajes de sesión
        $_SESSION['icono'] = "success";
        $_SESSION['mensaje'] = "Actualización exitosa";

        // Redirigir al usuario
        ?>
        <script >
            location.href = "<?php echo $URL;?>/subestaciones";
        </script>
        <?php
        exit;

    } catch (PDOException $e) {
        // Manejo de errores
        $_SESSION['icono'] = "error";
        $_SESSION['mensaje'] = "Error en la actualización: " . $e->getMessage();
        ?>
        <script >
            location.href = "<?php echo $URL;?>/subestaciones";
        </script>
        <?php
        exit;
    }

?>
