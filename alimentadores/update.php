<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/alimentadores/cargar_alimentador.php');
include('../app/controllers/subestaciones/listado_subestaciones.php');



//session_start();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Actualizar Alimentadores</h1>
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
                <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Editar Alimentador</h3>

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
                    <form action="../app/controllers/alimentadores/update_alimentador.php" method="post">
                      <input type="hidden" name="id_alimentador" value="<?php echo $id_alimentador_get;?>">
                      <div class ="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label for="">Código </label>
                                    <input type="text" class="form-control" value="<?php echo $codigo;?>" id="codigo" name="codigo" disabled>
                                    <small id="codigoMessage" class="form-text"></small>
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Subestación </label>
                                    <select class="form-control" id="subestacion" name="id_subestacion">
                                        <?php
                                        foreach ($results as $row) {
                                         $row_tabla = $row['nombre'];
                                          $id_subestacion = $row['id_subestacion']; ?>
                                          <option value="<?php echo $id_subestacion; ?>" 
                                          <?php if ($row_tabla == $nombre) echo 'selected="selected"'; ?>>
                                          <?php echo $row_tabla; ?>
                                          </option>
                                          <?php } ?>
                                        
                                    </select>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Marca </label>
                                    <input type="text" class="form-control" value="<?php echo $marca;?>" id="nombre" name="marca" required>
                                </div>
                            </div>           
                        </div>
                        <div class ="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Usuario </label>
                                    <input type="text" class="form-control" value= "<?php echo $email;?>" id="nombre" name="id_usuario" disabled>
                                    <input type="hidden" value="<?php echo $id_usuario;?>" id=" " name="id_usuario">
                                </div>
                            </div>    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""> Nivel de Tensión</label>
                                    <input type="text" class="form-control" value="<?php echo $nivel_tension;?>" id="nombre" name="nivel_tension" required>
                                </div>
                            </div>   
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado" name="estado_alimentador"required>
                                <option value="ac">Activo</option>
                                <option value="in">Inactivo</option>
                                </select>
                                </div>
                            </div> 
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Descripción </label>
                                    <textarea class="form-control" id="descripcion" name="zona" required><?php echo $zona;?></textarea>
                                </div>
                            </div>           
                        </div>

                        


                    </div>
                        
                      <div class="form-group">
                        <a href="index.php"class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
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

<script>
$(document).ready(function () {
    $('#codigo').on('input', function () {
        let codigo = $(this).val();

        if (codigo.length > 0) {
            $.ajax({
                url: '/SistemaElectrico/app/controllers/alimentadores/validar_codigo.php',
                method: 'POST',
                data: { codigo: codigo },
                dataType: 'json',
                success: function (response) {
                    let messageElement = $('#codigoMessage');

                    if (response.exists) {
                        messageElement.text(response.message).css('color', 'red');
                        // Bloquear el botón si el código ya existe
                        $('button[type="submit"]').prop('disabled', true);
                    } else {
                        messageElement.text(response.message).css('color', 'green');
                        // Habilitar el botón si el código está disponible
                        $('button[type="submit"]').prop('disabled', false);
                    }
                },
                error: function () {
                    alert('Error al validar el código. Intenta nuevamente.');
                }
            });
        } else {
            $('#codigoMessage').text('');
        }
    });
});
</script>
   




