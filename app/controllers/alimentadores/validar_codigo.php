<?php
include('../../config.php');

// Verificar si se recibió el parámetro 'codigo'
if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];

    try {
        // Consulta para verificar si el código existe
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM alimentadores WHERE codigo = :codigo");
        $stmt->bindParam(':codigo', $codigo);
        $stmt->execute();
        $codigo_existe = $stmt->fetchColumn();

        if ($codigo_existe > 0) {
            echo json_encode(['exists' => true, 'message' => 'El código ya existe.']);
        } else {
            echo json_encode(['exists' => false, 'message' => 'El código está disponible.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['error' => true, 'message' => 'Error en la consulta: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => true, 'message' => 'No se recibió el código.']);
}
