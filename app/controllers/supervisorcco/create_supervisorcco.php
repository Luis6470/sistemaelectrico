<?php
include('../../config.php');
session_start();
$nombre_suc = $_GET['nombre_suc'];
$apellidos_suc = $_GET['apellidos_suc'];
$email_suc = $_GET['email_suc'];
$celular_suc = $_GET['celular_suc'];    
$empresa_suc = $_GET['empresa_suc'];
$estado_supervisorcco = $_GET ['estado_supervisorcco'];

 // Preparar la consulta SQL
 $stmt = $pdo->prepare("INSERT INTO supervisorcco (nombre_suc, apellidos_suc, email_suc, celular_suc, empresa_suc, estado_supervisorcco, fecha_registro) 
 VALUES (:nombre_suc, :apellidos_suc,:email_suc,:celular_suc,:empresa_suc,:estado_supervisorcco,:fecha_registro)");

// Vincular parámetros
$stmt->bindParam(':nombre_suc', $nombre_suc);
$stmt->bindParam(':apellidos_suc', $apellidos_suc);
$stmt->bindParam(':email_suc', $email_suc);
$stmt->bindParam(':celular_suc', $celular_suc);
$stmt->bindParam(':empresa_suc', $empresa_suc);
$stmt->bindParam(':estado_supervisorcco', $estado_supervisorcco);
$stmt->bindParam(':fecha_registro', $fechaHora);

// Ejecutar la consulta
if   ($stmt->execute()){
//echo "Subestación registrada con éxito";
$_SESSION['mensaje'] = "Registro exitoso";
$_SESSION['icono'] = "success";
?>
<script >
    location.href = "<?php echo $URL;?>/supervisorcco";
</script>

<?php
//header('Location: '.$URL.'/subestaciones');  
} else  {


$_SESSION['mensaje'] = "Error";
$_SESSION['icono'] = "error";
?>
<script >
    location.href = "<?php echo $URL;?>/supervisorcco";
</script>

<?php
//header('Location: '.$URL.'/subestaciones');  
}
?>