<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISTEMA ELÉCTRICO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!--Libreria de sweehalert2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- jQuery -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnHJFzQ1B_8_fUEwn9qQJ7kWToZBmRdOU&libraries=places&callback=initMap" async defer></script>
  
  <script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">    
  
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">SISTEMA ELECTRICO</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>" class="brand-link">
    <img src="<?php echo $URL;?>/public/images/user2.jpg"  class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SIS ELÉCTRICO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombre_sesion;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if($descripcion_sesion == 'Administrador' || $descripcion_sesion == 'supervisor'){?>
            <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/crear.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Usuarios</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Parametros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/parametro/" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Parametros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/parametro/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Parametros</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-bolt"></i>
              <p>
                Subestaciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/subestaciones" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Subestaciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/crear.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Subestaciones</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-lightbulb"></i>
              
              <p>
                Alimentadores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/alimentadores" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Alimentadores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/alimentadores/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de Alimentadores</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-user-tie"></i>
              
              <p>
                Supervisorcco
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/supervisorcco" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Supervisores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/supervisorcco/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de Supervisores</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-user-tie"></i>
              
              <p>
                Supervisorset
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/supervisorset" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Supervisores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/app/controllers/interrupciones/fecha.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de Supervisores</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-plug"></i>
              
              <p>
                Interrupciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/interrupciones" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Interrupciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/interrupciones/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de interrupciones</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-calendar"></i>
              
              <p>
                Mantenimiento
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/mantenimiento" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Mantenimientos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/mantenimiento/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Mantenimiento</p>
                </a>
              </li>
            </ul>
          </li>

            <?php 
          } else if ($descripcion_sesion=='operador'){?>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
            <i class="nav-icon fa fa-plug"></i>
              
              <p>
                Interrupciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/interrupciones" class="nav-link active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Interrupciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/interrupciones/create.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de interrupciones</p>
                </a>
              </li>
            </ul>
          </li>


            <?php } ?>
          


          <li class="nav-item">
            <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="nav-link" style="background-color:red">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Cerrar Sesion
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
