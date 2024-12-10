<?php
include('../../config.php');
session_start();
$nombre_sus = $_GET['nombre_sus'];
$apellidos_sus = $_GET['apellidos_sus'];
$email_sus = $_GET['email_sus'];
$celular_sus = $_GET['celular_sus'];    
$empresa_sus = $_GET['empresa_sus'];
$estado_supervisorset = $_GET ['estado_supervisorset'];
$fechaHora = date("Y-m-d H:i:s");
 // Preparar la consulta SQL
 $stmt = $pdo->prepare("INSERT INTO supervisorset ( nombre_sus, apellidos_sus, email_sus, celular_sus, empresa_sus, estado_supervisorset,fecha_registro) 
 VALUES (:nombre_sus, :apellidos_sus,:email_sus,:celular_sus,:empresa_sus,:estado_supervisorset,:fecha_registro)");

// Vincular parámetros
$stmt->bindParam(':nombre_sus', $nombre_sus);
$stmt->bindParam(':apellidos_sus', $apellidos_sus);
$stmt->bindParam(':email_sus', $email_sus);
$stmt->bindParam(':celular_sus', $celular_sus);
$stmt->bindParam(':empresa_sus', $empresa_sus);
$stmt->bindParam(':estado_supervisorset', $estado_supervisorset);
$stmt->bindParam(':fecha_registro', $fechaHora);

// Ejecutar la consulta
if   ($stmt->execute()){
//echo "Subestación registrada con éxito";
$_SESSION['mensaje'] = "Registro exitoso";
$_SESSION['icono'] = "success";
?>
<script >
    location.href = "<?php echo $URL;?>/supervisorset";
</script>

<?php
//header('Location: '.$URL.'/subestaciones');  
} else  {


$_SESSION['mensaje'] = "Error";
$_SESSION['icono'] = "error";
?>
<script >
    location.href = "<?php echo $URL;?>/supervisorset";
</script>

<?php
//header('Location: '.$URL.'/subestaciones');  
}
?>