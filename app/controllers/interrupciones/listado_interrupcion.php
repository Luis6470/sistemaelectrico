<?php
$sql = " SELECT *, a.codigo , s.nombre as nombre_subestacion, u.email, u.nombre, u.apellidos,concat(u.nombre,' ',u.apellidos) as nombre_usuario, concat(sc.nombre_suc,' ',sc.apellidos_suc) as nombre_supercco,
        concat(ss.nombre_sus,' ',ss.apellidos_sus) as nombre_superset
       FROM interrupcion i INNER JOIN alimentadores a on i.id_alimentador= a.id_alimentador
       INNER JOIN subestacion s on s.id_subestacion= a.id_subestacion 
       INNER JOIN usuarios u on u.id_usuario = i.id_usuario
       INNER JOIN supervisorcco sc on sc.id_supervisorcco = i.id_supervisorcco
       INNER JOIN supervisorset ss on ss.id_supervisorset = i.id_supervisorset";       

$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultai = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>