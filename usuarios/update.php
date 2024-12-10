<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/update.php');
include('../app/controllers/parametro/listado_parametro_genero.php');
include('../app/controllers/parametro/listado_parametro_nivel.php');
include('../app/controllers/parametro/listado_parametro_turno.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Actualizar datos de Usuarios</h1>
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
          <div class="card card-success">
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
                  <form action="../app/controllers/usuarios/update_usuario.php" method="post">
                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario_get ?>">

                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">Apellidos</label>
                      <input type="text" name="apellidos" class="form-control" value="<?php echo $apellidos; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">Dirección</label>
                      <input type="text" name="direccion" class="form-control" value="<?php echo $direccion; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">Teléfono</label>
                      <input type="text" name="telefono" class="form-control" value="<?php echo $telefono; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">DNI</label>
                      <input type="text" name="dni" class="form-control" value="<?php echo $dni; ?>" placeholder="Escriba el DNI del usuario..." required>
                    </div>
                    <div class="form-group">
                      <label for="genero">Género</label>
                      <select class="form-control" id="genero" name="id_parametro_genero" required>
                      <?php
                      foreach ($result2 as $row) {
                       $row_tabla = $row['descripcion'];
                        $id_nivel = $row['id_parametro_genero']; ?>
                        <option value="<?php echo $id_nivel; ?>" 
                        <?php if ($row_tabla == $descripcion) echo 'selected="selected"'; ?>>
                        <?php echo $row_tabla; ?>
                        </option>
                        <?php } ?>
                        </select>

                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="">Contraseña</label>
                      <input type="password" name="password_user" class="form-control" placeholder="Escriba la contraseña..." required>
                    </div>
                    <div class="form-group">
                      <label for="">Confirme Contraseña</label>
                      <input type="password" name="password_repeat" class="form-control" placeholder="Confirme la contraseña..." required>
                    </div>
                    <div class="form-group">
                      <label for="nivel">Nivel</label>
                      <select class="form-control" id="genero" name="id_parametro_nivel" required>
                      <?php
                      foreach ($result1 as $row) {
                       $row_tabla = $row['descripcion'];
                        $id_nivel = $row['id_parametro_nivel']; ?>
                        <option value="<?php echo $id_nivel; ?>" 
                        <?php if ($row_tabla == $descripcion) echo 'selected="selected"'; ?>>
                        <?php echo $row_tabla; ?>
                        </option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="nivel">Turno</label>
                      <select class="form-control" id="genero" name="id_parametro_turno" required>
                      <?php
                      foreach ($result3 as $row) {
                       $row_tabla = $row['descripcion'];
                        $id_turno = $row['id_parametro_turno']; ?>
                        <option value="<?php echo $id_turno; ?>" 
                        <?php if ($row_tabla == $descripcion) echo 'selected="selected"'; ?>>
                        <?php echo $row_tabla; ?>
                        </option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="estado">Estado</label>
                      <select class="form-control" id="estado" name="estado_usuario" required>
                        <option value="ac" <?php if ($estado_usuario == 'ac') echo 'selected'; ?>>Activo</option>
                        <option value="in" <?php if ($estado_usuario == 'in') echo 'selected'; ?>>Inactivo</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <a href="index.php" class="btn btn-default">Cancelar</a>
                      <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

