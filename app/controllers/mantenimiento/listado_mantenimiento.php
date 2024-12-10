<?php
$sql = " SELECT *, a.codigo as codigo_alimentador, m.duracion, m.fecha_registro, u.email
       FROM mantenimiento m INNER JOIN alimentadores a on m.id_alimentador= a.id_alimentador
       INNER JOIN subestacion s on s.id_subestacion= a.id_subestacion 
       INNER JOIN usuarios u on u.id_usuario = m.id_usuario
       INNER JOIN supervisorcco sc on sc.id_supervisorcco = m.id_supervisorcco";
             

$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultam = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>  