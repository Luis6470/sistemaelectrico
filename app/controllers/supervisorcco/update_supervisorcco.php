<?php
include('../../config.php');
session_start(); // Iniciar la sesión al principio


    // Obtener datos del formulario
    $nombre_suc = $_GET['nombre_suc'];
    $apellidos_suc = $_GET['apellidos_suc'];
    $email_suc = $_GET['email_suc'];
    $celular_suc = $_GET['celular_suc'];
    $empresa_suc = $_GET['empresa_suc'];
    $estado_supervisorcco = $_GET['estado_supervisorcco'];
    $id_supervisorcco = $_GET['id_supervisorcco'];
    $fechaHora = date("Y-m-d H:i:s"); // Define la fecha de actualización actual

    // Preparar la consulta SQL
    $sql = "UPDATE supervisorcco 
            SET nombre_suc = :nombre_suc, 
                apellidos_suc = :apellidos_suc,
                email_suc = :email_suc,
                celular_suc = :celular_suc,
                empresa_suc = :empresa_suc,
                estado_supervisorcco = :estado_supervisorcco, 
                fecha_actualizacion = :fecha_actualizacion
            WHERE id_supervisorcco = :id_supervisorcco";

    try {
        
        $stmt = $pdo->prepare($sql);

        // Vincular parámetros
        $stmt->bindParam(':nombre_suc', $nombre_suc);
        $stmt->bindParam(':apellidos_suc', $apellidos_suc);
        $stmt->bindParam(':email_suc', $email_suc);
        $stmt->bindParam(':celular_suc', $celular_suc);
        $stmt->bindParam(':empresa_suc', $empresa_suc);
        $stmt->bindParam(':estado_supervisorcco', $estado_supervisorcco);
        $stmt->bindParam(':fecha_actualizacion', $fechaHora);
        $stmt->bindParam(':id_supervisorcco', $id_supervisorcco);

        // Ejecutar la consulta
        $stmt->execute();

        // Configurar mensajes de sesión
        $_SESSION['icono'] = "success";
        $_SESSION['mensaje'] = "Actualización exitosa";
        ?>
        <script >
            location.href = "<?php echo $URL;?>/supervisorcco";
        </script>
        <?php
        exit;

    } catch (PDOException $e) {
        // Manejo de errores
        $_SESSION['icono'] = "error";
        $_SESSION['mensaje'] = "Error en la actualización: " . $e->getMessage();
        ?>
        <script >
            location.href = "<?php echo $URL;?>/supervisorcco";
        </script>
        <?php
        exit;
    }

?>

