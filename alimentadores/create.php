<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/subestaciones/listado_subestaciones.php');
//include('../app/controllers/alimentadores/validar_codigo.php');


//session_start();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de Alimentadores</h1>
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
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingrese nuevo Alimentador</h3>

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
                    <form action="../app/controllers/alimentadores/create_alimentador.php" method="post">
                      <div class ="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label for="">Código </label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" required>
                                    <small id="codigoMessage" class="form-text"></small>
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Subestación </label>
                                    <select class="form-control" id="subestacion" name="id_subestacion">
                                        <?php 
                                        foreach  ($results as $row){?>
                                        <option value="<?php echo $row['id_subestacion'];?>"> 
                                        <?php echo $row ['nombre'];?>
                                       </option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Marca </label>
                                    <input type="text" class="form-control" id="nombre" name="marca" required>
                                </div>
                            </div>           
                        </div>
                        <div class ="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Usuario </label>
                                    <input type="text" class="form-control" value= "<?php echo $email_sesion;?>  "id="nombre" name="codigo" disabled>
                                    <input type="hidden" value="<?php echo $id_usuario_sesion;?>" id=" " name="id_usuario">
                                </div>
                            </div>    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""> Nivel de Tensión</label>
                                    <input type="text" class="form-control" id="nombre" name="nivel_tension" required>
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
                                    <textarea class="form-control" id="descripcion" name="zona" required></textarea>
                                </div>
                            </div>           
                        </div>

                        


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
   




