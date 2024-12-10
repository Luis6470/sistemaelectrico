<?php
include('../../config.php');
session_start();
$nombre = $_GET['nombre'];
$ubicacion = $_GET['ubicacion'];
$potencia = $_GET['potencia'];
$estado_subestacion = $_GET ['estado_subestacion'];

 // Preparar la consulta SQL
 $stmt = $pdo->prepare("INSERT INTO subestacion (nombre, ubicacion, estado_subestacion, potencia,fecha_registro) 
 VALUES (:nombre, :ubicacion, :estado_subestacion, :potencia, :fecha_registro)");

// Vincular parámetros
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':ubicacion', $ubicacion);
$stmt->bindParam(':potencia', $potencia);
$stmt->bindParam(':estado_subestacion', $estado_subestacion);
$stmt->bindParam(':fecha_registro', $fechaHora);

// Ejecutar la consulta
if   ($stmt->execute()){
//echo "Subestación registrada con éxito";
$_SESSION['mensaje'] = "Registro exitoso";
$_SESSION['icono'] = "success";
?>
<script >
    location.href = "<?php echo $URL;?>/subestaciones";
</script>

<?php
//header('Location: '.$URL.'/subestaciones');  
} else  {


$_SESSION['mensaje'] = "Error";
$_SESSION['icono'] = "error";
?>
<script >
    location.href = "<?php echo $URL;?>/subestaciones";
</script>

<?php
//header('Location: '.$URL.'/subestaciones');  
}
?>