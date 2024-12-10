<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/alimentadores/listado_alimentadores.php');
include('../app/controllers/subestaciones/listado_subestaciones.php');
include('../app/controllers/supervisorcco/listado_supervisorcco.php');
include('../app/controllers/mantenimiento/listado_mantenimiento.php');
include('../app/controllers/interrupciones/cargar_interrupcion.php');



//session_start();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de ordenes de Mantenimiento</h1>
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
              <div class= "col-md-12">
              <div class="row">
                <div class="col-md-12">
                <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ingrese nueva Orden</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <div style="display: flex">
                <h5 > Datos del Alimentador</h5>
                <div style="width : 20px"> </div>
                
               </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class ="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                    <input type="text" class="form-control" value ="<?php echo $id_alimentador;?>" id="id_alimentador"hidden>
                                    <input type="text" class="form-control" value ="<?php echo $id_interrupcion;?>" id="id_interrupcion"hidden>
                                    <label for="">Código </label>
                                    <input type="text" class="form-control" value ="<?php echo $codigo;?>" id="codigo" disabled >
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Subestación </label>
                                    <input type="text" class="form-control" value ="<?php echo $nombre_subestacion;?>" id="nombre" disabled >
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Marca </label>
                                    <input type="text" class="form-control" value ="<?php echo $marca;?>" id="marca" disabled >
                                </div>
                            </div>           
                        </div>
                        <div class ="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Usuario </label>
                                    <input type="text" class="form-control" value ="<?php echo $email ;?>" id="email" name="codigo" disabled>
                                    
                                </div>
                            </div>    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""> Nivel de Tensión</label>
                                    <input type="text" class="form-control" value ="<?php echo $nivel_tension;?>" id="nivel_tension" disabled >
                                </div>
                            </div>   
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" value ="<?php echo $estado_alimentador;?>"  id="estado_alimentador" disabled >
                                </div>
                            </div> 
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Descripción </label>
                                    <textarea class="form-control" id="zona" readonly><?php echo $zona; ?></textarea>
                                </div>
                            </div>           
                        </div>

                        <hr>
                        <div style="display: flex">
                           <h5 > Datos del Supervisorcco</h5>
                          <div style="width : 20px"> </div>
                          

                                  </div>
                                <div class="row">
                              <div class="col-md-12">
                                <div class="row mb-3">
                                  <!-- Nombre -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="text" class="form-control" value ="<?php echo $id_supervisorcco;?>" id="id_supervisorcco">
                                      <label for="nombre">Nombre</label>
                                      <input type="text" class="form-control" value ="<?php echo $nombre_suc;?>"  id="nombre_suc" name="nombre_suc"disabled>
                                    </div>
                                  </div>

                                  <!-- Apellidos -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="apellidos">Apellidos</label>
                                      <input type="text" class="form-control" value ="<?php echo $apellidos_suc;?>" id="apellidos_suc" name="apellidos_suc"disabled>
                                    </div>
                                  </div>

                                  <!-- Email -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="email">Email</label>
                                      <input type="text" class="form-control" value ="<?php echo $email_suc;?>" id="email_suc" name="email_suc"disabled>
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <!-- Celular -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="celular">Celular</label>
                                      <input type="text" class="form-control" value ="<?php echo $celular_suc;?>" id="celular_suc" name="celular_suc"disabled>
                                    </div>
                                  </div>

                                  <!-- Empresa -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="empresa">Empresa</label>
                                      <input type="text" class="form-control" value ="<?php echo $empresa_suc;?>" id="empresa_suc" name="empresa_suc"disabled>
                                    </div>
                                  </div>

                                  <!-- Estado -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="estado_supervisorcco">Estado</label>
                                      <select class="form-control" id="estado_supervisorcco" name="estado_supervisorcco" disabled>
                                                <option value="ac" <?php echo $estado_supervisorcco == 'ac' ? 'selected' : ''; ?>>Activo</option>
                                                <option value="in" <?php echo $estado_supervisorcco == 'in' ? 'selected' : ''; ?>>Inactivo</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                                        
                            
                                                   

                                  </div>
                                  </div>
                                  </div>
                  </div>
                
                </div>
              </div>  
                        
        </div>
      
        </div>


      
        <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Orden de Mantenimiento</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class= "col-md-12">
                  <div class="row">
                  <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="codigo_man">Código</label>
                                                  <input type="text" class="form-control" id="codigo_man" readonly>
                                                  <small id="codigoMessage" class="form-text"></small>
                                              </div>
                                          </div>

                                          <script>
                                              // Función para generar el código
                                              function generarCodigo() {
                                                  const inputCodigo = document.getElementById('codigo_man');

                                                  // Obtener la fecha actual
                                                  const fechaActual = new Date();
                                                  const anio = fechaActual.getFullYear();
                                                  const mes = String(fechaActual.getMonth() + 1).padStart(2, '0'); // Mes (0-11) ajustado a (1-12)
                                                  const dia = String(fechaActual.getDate()).padStart(2, '0');      // Día del mes

                                                  // Obtener el día de la semana (1 para lunes, 7 para domingo)
                                                  const diasSemana = [7, 1, 2, 3, 4, 5, 6]; // Ajustar el índice (0 para domingo)
                                                  const diaSemana = diasSemana[fechaActual.getDay()];

                                                  // Generar el código
                                                  const codigo = `${anio}-${mes}-${dia}-${String(diaSemana).padStart(2, '0')}`;
                                                  
                                                  // Asignar el código al campo de texto
                                                  inputCodigo.value = codigo;
                                              }

                                              // Generar el código al cargar la página
                                              document.addEventListener('DOMContentLoaded', generarCodigo);
                                          </script>


                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="">Usuario<la                                                                                                                                                                               mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmbel>
                                                  <input type="text" class="form-control" value="<?php echo $email_sesion;?>" id="id_usuario" desabled>
                                              </div>
                                          </div>

                    </div>
                    <div class="row">
                    
                    <div class="col-md-4"> 
                            <div class="form-group">
                                <label for="hora_inicio">Hora inicio</label>
                                <input type="text" class="form-control" id="hora_inicio" placeholder="HH:MM:SS">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hora_fin">Hora fin</label>
                                <input type="text" class="form-control" id="hora_fin" placeholder="HH:MM:SS">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duracion">Duración</label>
                                <input type="text" class="form-control" id="duracion" disabled>
                            </div>
                        </div>

                        <script>
                        function calcularDuracion() {
                            const horaInicio = document.getElementById("hora_inicio").value;
                            const horaFin = document.getElementById("hora_fin").value;

                            // Función para convertir HH:MM:SS a segundos
                            function toSeconds(hhmmss) {
                                const parts = hhmmss.split(':');
                                if (parts.length !== 3) return 0; // Retorna 0 si el formato es incorrecto
                                return (+parts[0]) * 3600 + (+parts[1]) * 60 + (+parts[2]);
                            }

                            // Función para convertir segundos a HH:MM:SS
                            function toHHMMSS(seconds) {
                                const hours = Math.floor(seconds / 3600);
                                const minutes = Math.floor((seconds % 3600) / 60);
                                const secs = seconds % 60;
                                return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
                            }

                            const inicioSegundos = toSeconds(horaInicio);
                            const finSegundos = toSeconds(horaFin);
                            
                            let duracionSegundos = finSegundos - inicioSegundos;

                            // Si la duración es negativa, significa que la hora de fin es al día siguiente
                            if (duracionSegundos < 0) {
                                duracionSegundos += 24 * 3600; // Añadir 24 horas en segundos
                            }

                            const duracion = toHHMMSS(duracionSegundos);
                            document.getElementById("duracion").value = duracion; // Asignar la duración calculada
                        }

                        // Agregar eventos de entrada a los campos de hora
                        document.getElementById("hora_inicio").addEventListener("input", calcularDuracion);
                        document.getElementById("hora_fin").addEventListener("input", calcularDuracion);
                        </script>

                                          
                    

                      <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="">Fecha </label>
                                          <input type="date" class="form-control" id="fecha_registro" >
                                          
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="">Descripcion</label>
                                          <textarea class="form-control" id="descripcion"></textarea>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="">Responsable</label>
                                          <input type="text" class="form-control" id="responsable" name="proteccion">
                                        </div>
                                      </div>
                                    
                         </div>
                        <div class="row">
                                  <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="">Tipo de Mantenimiento</label>
                                          <select class="form-control" id="tipo_mantenimiento" >
                                          <option value="">Seleccione un estado</option>
                                        <option value="preventivo">preventivo</option>
                                        <option value="correctivo">correctivo</option>
                                      </select>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for=" ">Estado</label>
                                       <select class="form-control" id="estado_mantenimiento" >
                                       <option value="">Seleccione un estado</option>
                                        <option value="ac">Activo</option>
                                        <option value="in">Inactivo</option>
                                      </select>
                                        </div>
                                      </div>
                                      
                                      
                          </div>
                          <hr>
                          <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                          <button type="submit" id="btn_guardar" class="btn btn-primary">Guardar</button>
                                        </div>
                                      </div>
                                      <script>
                                      $("#btn_guardar").click(function(){
                                        //alert('funciona');
                                        var codigo_man = $("#codigo_man").val();
                                        var hora_inicio = $('#hora_inicio').val();
                                        var hora_fin = $('#hora_fin').val();
                                        var duracion = $('#duracion').val();
                                        var fecha_registro = $('#fecha_registro').val();
                                        var descripcion = $('#descripcion').val();
                                        var responsable = $('#responsable').val();
                                        var tipo_mantenimiento = $('#tipo_mantenimiento').val();
                                        var estado_mantenimiento = $('#estado_mantenimiento').val();
                                        var id_usuario = '<?php echo  $id_usuario_sesion;?>';
                                        var id_alimentador  = $('#id_alimentador').val();
                                        var id_supervisorcco = $('#id_supervisorcco').val();
                                        var id_interrupcion = $('#id_interrupcion').val();
                                        alert(id_interrupcion);
                                       
                                        if (codigo_man == ""){
                                          alert('Ingrese el codigo ');
                                          $('#codigo_man').focus(); 
                                        } else
                                         if (hora_inicio == "") {
                                            alert('Debe llenar la hora de inicio');
                                            $('#hora_inicio').focus();
                                        } else if (hora_fin == "") {
                                            alert('Debe llenar la hora de fin');
                                            $('#hora_fin').focus();
                                        } else if (fecha_registro == "") {
                                            alert('Debe llenar la fecha');
                                            $('#fecha_registro').focus();
                                        } else if (descripcion == "") {
                                            alert('Debe llenar la descripcion');
                                            $('#descripcion').focus();
                                        } else if (responsable == "") {
                                            alert('Debe llenar responsable');
                                            $('#responsable').focus();
                                        } else if (tipo_mantenimiento == "") {
                                            alert('Debe llenar tipo de mantenimiento');
                                            $('#tipo_mantenimiento').focus();

                                        } else if (estado_mantenimiento == "") {
                                          //console.log("Estado interrupción está vacío");
                                          alert('Debe llenar el estado de la interrupción');
                                          
                                            $('#estado_mantenimiento').focus();

                                        } else {
                                            // Realizar la solicitud AJAX
                                            var url = "../app/controllers/mantenimiento/create_mantenimiento.php";
                                            $.get(url, {
                                                codigo_man: codigo_man,
                                                hora_inicio: hora_inicio,    
                                                hora_fin: hora_fin,
                                                duracion: duracion,
                                                fecha_registro: fecha_registro,
                                                descripcion: descripcion,
                                                responsable: responsable,
                                                tipo_mantenimiento: tipo_mantenimiento,
                                                estado_mantenimiento: estado_mantenimiento,
                                                id_alimentador: id_alimentador,
                                                id_supervisorcco : id_supervisorcco,
                                                id_usuario : id_usuario,
                                                id_interrupcion : id_interrupcion


                                            }, function (data) {
                                                alert("Datos enviados al controlador");
                                                $('#respuesta').html(data); // Si necesitas mostrar una respuesta en el DOM
                                            }).fail(function () {
                                                alert("Hubo un error al enviar los datos");
                                            });
                                        }

                                                              
                                                              });

                                      </script>

                                      


                          </div>
                          
                </div>
              </div>
              <div id="respuesta"></div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </div>
      
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
      
    </div>
    <!-- /.content -->
  </div>
                                        </div>
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
  $(function () {
    $("#example1").DataTable({
      "PageLength": 5,  
      "lengthMenu": [ [5, 10, 25, 50, 100], [5, 10, 25, 50, 100] ], 
      "language": {
          "emptyTable": "No hay información",
          "decimal": "",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Alimentadores",
          "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
          "infoFiltered": "(Filtrado de _MAX_ total Alimentadores)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar_MENU_ Alimentadores",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscador:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
     
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<script>
  $(function () {
    $("#example2").DataTable({
      "PageLength": 5,  
      "lengthMenu": [ [5, 10, 25, 50, 100], [5, 10, 25, 50, 100] ], 
      "language": {
          "emptyTable": "No hay información",
          "decimal": "",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Supervisorcco",
          "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
          "infoFiltered": "(Filtrado de _MAX_ total Supervisorcco)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar_MENU_ Supervisorcco",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscador:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
     
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<script>
$(document).ready(function () {
    $('#codigo_man').on('input', function () {
        let codigo_man = $(this).val();

        if (codigo_man.length > 0) {
            $.ajax({
                url: '/SistemaElectrico/app/controllers/mantenimiento/validar_codigo.php',
                method: 'POST',
                data: { codigo_man: codigo_man },
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
   










