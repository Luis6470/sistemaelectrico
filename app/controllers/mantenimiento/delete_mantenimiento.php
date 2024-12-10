<?php
include('../../config.php');
$id_mantenimiento=$_GET['id_mantenimiento'];
//$id_interrupcion= $_GET['id_interrupcion'];
$id_alimentador= $_GET['id_alimentador'];

echo $id_interrupcion.'-'. $id_alimentador;


$stmt = $pdo->prepare("DELETE FROM mantenimiento WHERE id_mantenimiento = :id_mantenimiento");

// Preparar la consulta SQL


// Vincular parámetros

$stmt->bindParam(':id_mantenimiento', $id_mantenimiento);




//   $stmt->bindParam(':fecha_registro', $fechaHora);

if   ($stmt->execute()){
    session_start(); 
$_SESSION['mensaje'] = "Interrupción eliminada con éxito";
$_SESSION['icono'] = "success";


?>

<script>
location.href = "<?php echo $URL; ?>/mantenimiento";

</script>


<?php
//header('Location: '.$URL.'/subestaciones');  
} else  {


$_SESSION['mensaje'] = "Error";
$_SESSION['icono'] = "error";
?>
<script>
location.href = "<?php echo $URL; ?>/mantenimiento";
</script>

<?php
//header('Location: '.$URL.'/subestaciones');  
}
?>