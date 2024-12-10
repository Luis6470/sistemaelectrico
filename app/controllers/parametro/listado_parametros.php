<?php
$sql = "SELECT * FROM parametro ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultp = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>