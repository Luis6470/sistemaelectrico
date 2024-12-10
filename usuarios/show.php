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
            <h1 class="m-0">Registro de Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid"> 

              <div c lass="row">
                <div class="col-md-5">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos del usuario</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    
                      <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" name ="nombre"  class="form-control" value ="<?php echo $nombre;?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">email</label>
                        <input type="text" name="email"class="form-control" value ="<?php echo $email;?>" disabled>
                      </div>   
                      <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" name="descripcion"class="form-control" value ="<?php echo $descripcion;?>" disabled>
                      </div>   
                      <div class="form-group">
                        <a href="index.php"class="btn btn-default">Volver</a>
                      </div>
                    
                  </div>
                </div>
              </div>


                </div>
              </div>  
                        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<?php
include('../layout/mensaje.php');
include('../layout/parte2.php');
?>
