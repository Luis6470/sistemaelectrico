<?php
// Obtiene el ID de usuario y lo valida
$id_parametro_get = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Verifica que el ID sea válido
if ($id_parametro_get > 0) {
    // Preparar y ejecutar la consulta SQL de forma segura
    $sql = "SELECT * FROM parametro WHERE id_parametro = :id_parametro";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_parametro', $id_parametro_get, PDO::PARAM_INT);
    $stmt->execute();

    // Obtiene el resultado
    $resultp = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica si se encontró el usuario
    if ($resultp) {
        $descripcion = $resultp['descripcion'];
        $tipo = $resultp['tipo'];
        $estado_parametro = $resultp['estado_parametro'];
    } else {
        echo "parametro no encontrado.";
    }
} else {
    echo "ID de parametro no válido.";
}
?>