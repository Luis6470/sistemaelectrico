<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio


    // Obtener datos del formulario
    $nombre_sus = $_GET['nombre_sus'];
    $apellidos_sus = $_GET['apellidos_sus'];
    $email_sus = $_GET['email_sus'];
    $celular_sus = $_GET['celular_sus'];
    $empresa_sus = $_GET['empresa_sus'];
    $estado_supervisorset = $_GET['estado_supervisorset'];
    $id_supervisorset = $_GET['id_supervisorset'];
    $fechaHora = date("Y-m-d H:i:s"); // Define la fecha de actualización actual

    // Preparar la consulta SQL
    $sql = "UPDATE supervisorset 
            SET nombre_sus = :nombre_sus, 
                apellidos_sus = :apellidos_sus,
                email_sus = :email_sus,
                celular_sus = :celular_sus,
                empresa_sus = :empresa_sus,
                estado_supervisorset = :estado_supervisorset, 
                fecha_actualizacion = :fecha_actualizacion
            WHERE id_supervisorset = :id_supervisorset";

    try {
        
        $stmt = $pdo->prepare($sql);

        // Vincular parámetros
        $stmt->bindParam(':nombre_sus', $nombre_sus);
        $stmt->bindParam(':apellidos_sus', $apellidos_sus);
        $stmt->bindParam(':email_sus', $email_sus);
        $stmt->bindParam(':celular_sus', $celular_sus);
        $stmt->bindParam(':empresa_sus', $empresa_sus);
        $stmt->bindParam(':estado_supervisorset', $estado_supervisorset);
        $stmt->bindParam(':fecha_actualizacion', $fechaHora);
        $stmt->bindParam(':id_supervisorset', $id_supervisorset);

        // Ejecutar la consulta
        $stmt->execute();

        // Configurar mensajes de sesión
        $_SESSION['icono'] = "success";
        $_SESSION['mensaje'] = "Actualización exitosa";
        ?>
        <script >
            location.href = "<?php echo $URL;?>/supervisorset";
        </script>
        <?php
        exit;

    } catch (PDOException $e) {
        // Manejo de errores
        $_SESSION['icono'] = "error";
        $_SESSION['mensaje'] = "Error en la actualización: " . $e->getMessage();
        ?>
        <script >
            location.href = "<?php echo $URL;?>/supervisorset";
        </script>
        <?php
        exit;
    }

?>

