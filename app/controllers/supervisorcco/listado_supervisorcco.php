<?php
$sql = "SELECT * FROM supervisorcco ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultcco = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>