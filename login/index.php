<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEMA ELECTRICO | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!--Libreria de sweehalert2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
  body {
    background: linear-gradient(to bottom right, #3b5998, #8b9dc3); /* Degradado */
    height: 100vh; /* Altura completa de la ventana */
    margin: 0; /* Sin margen */
    display: flex;
    align-items: center;
    justify-content: center; /* Centrar el contenido */
  }

  .login-box {
    background: rgba(255, 255, 255, 0.9); /* Fondo blanco con opacidad */
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Sombra */
  }
</style>
  



</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <?php
   session_start(); 
   if ((isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']))){
    $respuesta= $_SESSION['mensaje'];
    $icono=$_SESSION['icono'];?>
    <script>
      Swal.fire({
      position: "top-end",
      icon: "<?php echo $icono?>",
      title: "<?php echo $respuesta?>",
      showConfirmButton: false,
      timer: 1500
      });
    </script>
    <?php
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
   }
   ?>
  <!-- /.login-logo -->
  <center>
    <img src="https://img.freepik.com/free-vector/technicians-repairing-generator-transformer-flat-illustration-cartoon-electric-workers-making-power-distribution-line_74855-14173.jpg?t=st=1729626510~exp=1729630110~hmac=c95043a740ca6e4d3438029321c95c5a687994127f187ccc4e443e3bc4d79b22&w=826"
    alt="" width ="300px">
   </center>
   <br>
  
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>SISTEMA </b>ELÉCTRICO</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">INICIE SESION</p>

      <form action="../app/controllers/login/acceso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </0div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <hr>
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
