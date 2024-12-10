<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/parametro/listado_parametro_nivel.php');
include('../app/controllers/parametro/listado_parametro_genero.php');
include('../app/controllers/parametro/listado_parametro_turno.php');

//session_start();

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

              <div class="row">
                <div class="col-md-5">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingrese nuevo usuario</h3>

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
                    <form action="../app/controllers/usuarios/nuevo_usuario.php" method="post">
                      <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" name ="nombre" class="form-control" placeholder="Escriba el nombre del usuario..."required>
                      </div>
                      <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" name="apellidos"class="form-control" placeholder="Escriba el Apellido del usuario..."required>
                      </div>
                      <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" name = "direccion" class="form-control" placeholder="Escriba la Dirección del usuario..."required>
                      </div>
                      <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="text" name= "telefono" class="form-control" placeholder="Escriba el nro de telefono del usuario..."required>
                      </div>
                      <div class="form-group">
                        <label for="">DNI</label>
                        <input type="text" name="dni" class="form-control" placeholder="Escriba el DNI del usuario..."required>
                      </div>
                      <div class="form-group">
                        <label for="genero">Genero</label>
                        <select class="form-control" id="genero" name="id_parametro_genero" required>
                         <?php foreach ($result2 as $row) { ?>
                          <option value="<?php echo $row['id_parametro']; ?>"><?php echo $row['descripcion']; ?></option>
                          <?php } ?>
                          </select>

                      </div>
                      <div class="form-group">
                        <label for="">email</label>
                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Escriba el correo..."required>
                      </div>
                      <div class="form-group">
                        <label for="">contraseña</label>
                        <input type="password" name="password_user" autocomplete="off" class="form-control" placeholder="Escriba la contraseña..."required>
                      </div>
                      <div class="form-group">
                        <label for="">Confirme Contraseña</label>
                        <input type="password"name ="password_repeat" autocomplete="off"class="form-control" placeholder="Repita la contraseña..."required>
                      </div>
                      <div class="form-group">
                        <label for="nivel">Nivel</label>
                        <select class="form-control" id="nivel" name="id_parametro_nivel" required>
                         <?php foreach ($result1 as $row) { ?>
                          <option value="<?php echo $row['id_parametro']; ?>"><?php echo $row['descripcion']; ?></option>
                          <?php } ?>
                        </select>

                      </div>
                      <div class="form-group">
                        <label for="nivel">Turno</label>
                        <select class="form-control" id="nivel" name="id_parametro_turno" required>
                         <?php foreach ($result3 as $row) { ?>
                        <option value="<?php echo $row['id_parametro']; ?>"><?php echo $row['descripcion']; ?></option>
                        <?php } ?>
                        </select>

                      </div>
                      <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado_usuario"required>
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


   




