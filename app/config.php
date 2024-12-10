<?php
define ('SERVIDOR','localhost');
define('USUARIO','root');
define ('PASSWORD','');
define ('BD','bd_sistemaelectrico');
$SERVIDOR = "mysql:dbname=" . BD . ";host=" . SERVIDOR;
try {
    $pdo = new PDO($SERVIDOR, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   // echo "Conexión a la base de datos exitosa";
} catch(PDOException $e) {
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL='http://localhost/SistemaElectrico';

date_default_timezone_set("America/Lima");
$fechaHora = date('Y-m-d h:i:s');

if (isset($_SESSION['mensaje'])){
    $respuesta= $_SESSION['mensaje'];?>
    <script>
      Swal.fire({
      position: "top-end",
      icon: "error",
      title: "<?php echo $respuesta?>",
      showConfirmButton: false,
      timer: 1500
      });
    </script>
    <?php
   }