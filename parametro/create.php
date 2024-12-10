<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');

//session_start();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de Parametros</h1>
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

              <div class="row">
                <div class="col-md-5">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingrese nuevo Parametro</h3>

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
                    <form action="../app/controllers/parametro/nuevo_parametro.php" method="post">
                      <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" name ="descripcion" class="form-control" placeholder="Escriba la descripcion..."required>
                      </div>
                      <div class="form-group">
                        <label for="">Tipo</label>
                        <input type="text" name="tipo"class="form-control" placeholder="Escriba el tipo.."required>
                      </div>
                      
                      <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado_parametro"required>
                        <option value="ac">Activo</option>
                        <option value="in">Inactivo</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <a href="index.php"class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                        
                      </div>
                    </form>
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
include('../layout/mensajes.php');
include('../layout/parte2.php');
?>


   




