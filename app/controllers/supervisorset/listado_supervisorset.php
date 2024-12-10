<?php
$sql = "SELECT * FROM supervisorset ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultset = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>