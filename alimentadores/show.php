<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/alimentadores/cargar_alimentador.php');



//session_start();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Alimentadores</h1>
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
                <div class="col-md-12">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Datos del Alimentador: <?php echo $codigo;?></h3>

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
                    
                      <div class ="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label for="">Código </label>
                                    <input type="text" class="form-control" value="<?php echo $codigo?>" disabled >
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Subestación </label>
                                    <input type="text" class="form-control" value="<?php echo $nombre?>" disabled >
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Marca </label>
                                    <input type="text" class="form-control" value="<?php echo $marca?>" disabled >
                                </div>
                            </div>           
                        </div>
                        <div class ="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Usuario </label>
                                    <input type="text" class="form-control" value= "<?php echo $email;?>  "id="nombre" name="codigo" disabled>
                                    
                                </div>
                            </div>    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""> Nivel de Tensión</label>
                                    <input type="text" class="form-control" value="<?php echo $nivel_tension;?>" disabled >
                                </div>
                            </div>   
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" value="<?php echo $estado_alimentador;?>" disabled >
                                </div>
                            </div> 
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Descripción </label>
                                    <textarea class="form-control" disabled><?php echo $zona;?> </textarea>
                                </div>
                            </div>           
                        </div>

                        


                    </div>
                        
                      <div class="form-group">
                        <a href="index.php"class="btn btn-secondary">Volver</a>
                        
                      </div>
                        
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
//include('../layout/mensajes.php');
include('../layout/parte2.php');
?>


   




