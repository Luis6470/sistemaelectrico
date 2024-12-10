<?php
include('../../config.php');

session_start();

$email = $_POST['email'];
$password_user = $_POST['password_user'];
$contador = 0;

$sql = "SELECT * FROM usuarios WHERE email = :email";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {
    $contador++;
    $password_tabla = $usuario['password_user'];
    $nombre = $usuario['nombre'];
}

if ($contador > 0 && password_verify($password_user, $password_tabla)) {
    $_SESSION['sesion_email'] = $email;
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/index.php');
    exit;
} else {
      
    $_SESSION['mensaje'] = "Datos incorrectos";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/login');
    exit;
}


//&&(password_verify($password_user, $password_tabla)

//include('../../config.php');
//$email = $_POST['email'];
//$password = $_POST['password'];
//$contador=0;
//
//
//
//
//$usuario= $query ->fetchAll(fetchstyle:PDO::FETCH_ASSOC);
//
  //  $contador=$contador+1;
   // 
    //$password=$usuario('contraseña');
//}
//if($contador==0){
  //  echo "Usuario no existe";
//}else{
  //  echo "Usuario existe";
//}
?>
