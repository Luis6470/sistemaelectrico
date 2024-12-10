<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/alimentadores/listado_alimentadores.php');
include('../app/controllers/subestaciones/listado_subestaciones.php');
include('../app/controllers/supervisorcco/listado_supervisorcco.php');
include('../app/controllers/supervisorset/listado_supervisorset.php');
include('../app/controllers/interrupciones/listado_interrupcion.php');
include('../app/controllers/interrupciones/cargar_interrupcion.php');
include('../app/controllers/mantenimiento/cargar_mantenimiento.php');




//session_start();

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mantenimiento nro : <?php echo $id_mantenimiento; ?></h1>
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
                <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Esta seguro de eliminar la interrupcion </h3>

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
                                    <input type="text" class="form-control" value="<?php echo $id_alimentador;?>" id="id_alimentador">
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
                                <input type="text" class="form-control" value ="<?php echo $estado_alimentador;?>" id="estado_alimentador" disabled >
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
                                      <input type="text" class="form-control" id="id_supervisorcco" hidden>
                                      <label for="nombre">Nombre</label>
                                      <input type="text" class="form-control" value ="<?php echo $nombre_suc;?>" id="nombre_suc" name="nombre_suc"disabled>
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
                                      <input type="text" class="form-control"value ="<?php echo $email_suc;?>" id="email_suc" name="email_suc"disabled>
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <!-- Celular -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="celular">Celular</label>
                                      <input type="text" class="form-control"value ="<?php echo $celular_suc;?>" id="celular_suc" name="celular_suc"disabled>
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
                                                            <label for="">Código</label>
                                                            <input type="text" class="form-control" value="<?php echo $codigo_man;?>" id="codigo_man" disabled>
                                                            </div>
                                                            </div>

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
                                                    <input type="text" class="form-control" value="<?php echo $hora_inicio;?>" id="hora_inicio" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="hora_fin">Hora fin</label>
                                                    <input type="text" class="form-control" value="<?php echo $hora_fin;?>" id="hora_fin" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="duracion">Duración</label>
                                                    <input type="text" class="form-control" value="<?php echo $duracion;?>" id="duracion" disabled>
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
                                                            <input type="date" class="form-control" value="<?php echo $fecha_registro;?>" id="fecha_registro" disabled >
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label for="">Descripcion</label>
                                                            <textarea class="form-control" id= "descripcion" readonly><?php echo $descripcion;?></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label for="">Responsable</label>
                                                            <input type="text" class="form-control" value="<?php echo $responsable;?>" id="responsable" name="proteccion" disabled>
                                                            </div>
                                                        </div>
                                                        
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-3">
                                                            <div class="form-group">
                                                            <label for="">Tipo de Mantenimiento</label>
                                                            <select class="form-control" id="tipo_mantenimiento" name="" disabled>
                                                                    <option value="preventivo" <?php echo $tipo_mantenimiento == 'preventivo' ? 'selected' : ''; ?>>preventivo</option>
                                                                    <option value="correctivo" <?php echo $tipo_mantenimiento == 'correctivo' ? 'selected' : ''; ?>>correctivo</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label for=" ">Estado</label>
                                                            <select class="form-control" id="estado_mantenimiento" name="" disabled>
                                                                    <option value="ac" <?php echo $estado_mantenimiento == 'ac' ? 'selected' : ''; ?>>Activo</option>
                                                                    <option value="in" <?php echo $estado_mantenimiento == 'in' ? 'selected' : ''; ?>>Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                            </div>  </div>
                                    </div>
                                    
                                    </div>
                                </div>  
                                            
                            </div>
                        
                            </div>


      
        
                          <hr>
                          <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <button class="btn btn-danger" id="btn-eliminar"> <i class="fa fa-trash"></i>Eliminar Orden Mantenimiento</button>
                                        </div>
                                      </div>
                                
                                      <script>
                                  $('#btn-eliminar').click(function(){
                                      var id_mantenimiento = <?php echo $id_mantenimiento; ?>;
                                      var id_interrupcion = <?php echo $id_interrupcion_get; ?>; // Asegúrate de que esta variable esté definida
                                      var id_alimentador = $('#id_alimentador').val();

                                      Swal.fire({
                                          title: "¿Está seguro de eliminar?",
                                          icon: "question",
                                          showCancelButton: true,
                                          confirmButtonColor: "#3085d6",
                                          cancelButtonColor: "#d33",
                                          confirmButtonText: "Sí, deseo eliminar!"
                                      }).then((result) => {
                                          if (result.isConfirmed) {
                                              eliminar(); // Llama a la función eliminar
                                          }
                                      });

                                      function eliminar() {
                                          var url = "../app/controllers/mantenimiento/delete_mantenimiento.php";
                                          $.get(url, {

                                            id_mantenimiento: id_nantenimiento,
                                              //id_interrupcion: id_interrupcion,
                                              id_alimentador: id_alimentador,
                                          }, function(data) {
                                              // Muestra el mensaje de éxito solo si la eliminación fue exitosa
                                              //Swal.fire({
                                                //  title: "Interrupción eliminada",
                                                 // icon: "success"
                                              //});
                                              $('#respuesta_delete').html(data); // Si necesitas mostrar una respuesta en el DOM
                                          })
                                          }});
                                      
                                
                              </script>
                          </div>
                </div>
              </div>
              <div id="respuesta_delete"> </div>
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









