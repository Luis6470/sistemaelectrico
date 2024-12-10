<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/show_usuario.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Eliminar Usuarios</h1>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </div>
  
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-md-5">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Desea Eliminar al usuario ?</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form action="../app/controllers/usuarios/delete_usuario.php" method="post">
                    <input type="" name="id_usuario" value="<?php echo $id_usuario_get; ?>"hidden>

                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" disabled>
                    </div>

                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" disabled>
                    </div>   
                    <div class="form-group">
                      <label for="">Nivel</label>
                      <input type="text" name="id_parametro_nivel" class="form-control" value="<?php echo $descripcion; ?>" disabled>
                    </div> 

                    <div class="form-group">
                      <a href="index.php" class="btn btn-default">Volver</a>
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
</div>

<aside class="control-sidebar control-sidebar-dark">
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>

<?php
include('../layout/mensajes.php');
include('../layout/parte2.php');
?>

