<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
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
            <h1 class="m-0">Listado de Subestaciones 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create"> <i class="fa fa-plus"></i>
            Agregar Subestacion
            </button>     
            </h1>
            

            

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
                <h3 class="card-title">Subestaciones registradas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr> 
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                      <?php
                      $contador=0;
                      foreach($results as $row) { 
                      $id_subestacion = $row["id_subestacion"]; 
                      $nombre = $row["nombre"];
                      $ubicacion = $row["ubicacion"];
                      $potencia = $row["potencia"];
                      $estado_subestacion = $row["estado_subestacion"];?>
                      <tr>
                      <td> <?php echo $contador=$contador+1;?></td>
                      <td> <?php echo $row["nombre"];?></td>
                      <td> <?php echo $row["ubicacion"];?></td>
                      <td> 
                            <div style="display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update<?php echo $id_subestacion;?>"> <i class="fa fa-pencil-alt"></i>
                            Editar Subestacion
                            </button>

                            <div class="modal fade" id="modal-update<?php echo $id_subestacion; ?>">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h4 class="modal-title">Editar Subestación</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="form-group">
                                                          <label for="nombre<?php echo $id_subestacion; ?>">Nombre de la subestación</label>
                                                          <input type="text" class="form-control" id="nombre<?php echo $id_subestacion; ?>" value="<?php echo $nombre; ?>" name="nombre">
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="ubicacion<?php echo $id_subestacion; ?>">Ubicación Georeferencial</label>
                                                          <input type="text" class="form-control" id="ubicacion<?php echo $id_subestacion; ?>" name="ubicacion" readonly value="<?php echo $ubicacion; ?>">
                                                          <div id="map<?php echo $id_subestacion; ?>" style="height: 300px; width: 100%; margin-top: 10px;"></div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="potencia<?php echo $id_subestacion; ?>">Potencia</label>
                                                          <input type="text" class="form-control" id="potencia<?php echo $id_subestacion; ?>" value="<?php echo $potencia; ?>" name="potencia">
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="estado_subestacion<?php echo $id_subestacion; ?>">Estado</label>
                                                          <select class="form-control" id="estado_subestacion<?php echo $id_subestacion; ?>" name="estado_subestacion">
                                                              <option value="ac" <?php echo $estado_subestacion == 'ac' ? 'selected' : ''; ?>>Activo</option>
                                                              <option value="in" <?php echo $estado_subestacion == 'in' ? 'selected' : ''; ?>>Inactivo</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                              <button type="button" class="btn btn-success" id="btn_update<?php echo $id_subestacion; ?>">Editar</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <script>
                              let map<?php echo $id_subestacion; ?>, marker<?php echo $id_subestacion; ?>;

                              function initMap<?php echo $id_subestacion; ?>() {
                                  const initialPosition = {
                                      lat: <?php echo explode(',', $ubicacion)[0]; ?>,
                                      lng: <?php echo explode(',', $ubicacion)[1]; ?>
                                  };

                                  map<?php echo $id_subestacion; ?> = new google.maps.Map(document.getElementById("map<?php echo $id_subestacion; ?>"), {
                                      center: initialPosition,
                                      zoom: 14,
                                  });

                                  marker<?php echo $id_subestacion; ?> = new google.maps.Marker({
                                      position: initialPosition,
                                      map: map<?php echo $id_subestacion; ?>,
                                      draggable: true,
                                  });

                                  updateLocationField<?php echo $id_subestacion; ?>(initialPosition);

                                  marker<?php echo $id_subestacion; ?>.addListener("dragend", (event) => {
                                      const position = {
                                          lat: event.latLng.lat(),
                                          lng: event.latLng.lng(),
                                      };
                                      updateLocationField<?php echo $id_subestacion; ?>(position);
                                  });

                                  map<?php echo $id_subestacion; ?>.addListener("click", (event) => {
                                      const position = {
                                          lat: event.latLng.lat(),
                                          lng: event.latLng.lng(),
                                      };
                                      marker<?php echo $id_subestacion; ?>.setPosition(position);
                                      updateLocationField<?php echo $id_subestacion; ?>(position);
                                  });
                              }

                              function updateLocationField<?php echo $id_subestacion; ?>(position) {
                                  const locationField = document.getElementById("ubicacion<?php echo $id_subestacion; ?>");
                                  locationField.value = `${position.lat}, ${position.lng}`;
                              }

                              $('#modal-update<?php echo $id_subestacion; ?>').on('shown.bs.modal', function () {
                                  google.maps.event.trigger(map<?php echo $id_subestacion; ?>, 'resize');
                                  initMap<?php echo $id_subestacion; ?>();
                              });
                              </script>

                              
                           
                            <script>

                              $('#btn_update<?php echo $id_subestacion;?>').click(function () {
                                  alert(<?php echo $id_subestacion;?>);
                                  var nombre = $("#nombre<?php echo $id_subestacion; ?>").val();
                                  var ubicacion = $("#ubicacion<?php echo $id_subestacion; ?>").val();
                                  var potencia = $("#potencia<?php echo $id_subestacion; ?>").val();
                                  var estado_subestacion = $("#estado_subestacion<?php echo $id_subestacion; ?>").val();
                                  var url = "../app/controllers/subestaciones/update_subestacion.php";

                                  $.get(url, {
                                      nombre: nombre,
                                      ubicacion: ubicacion,
                                      potencia: potencia,
                                      estado_subestacion: estado_subestacion,
                                      id_subestacion: <?php echo $id_subestacion; ?>
                                  }, function (data) {
                                      $('#respuesta-update<?php echo $id_subestacion; ?>').html(data);
                                  });
                              });

                            </script>

                            <div class="modal fade" id="respuesta-update<?php echo $id_subestacion; ?>" ></div>
                          
                            </div>
                            
                      </td>
                      </tr>
                      <?php
                              }
                            ?>
                      </tbody>
                      
                  
                  <tfoot>
                  <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
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
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Subestacion",
          "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
          "infoFiltered": "(Filtrado de _MAX_ total Subestacion)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar_MENU_ Subestacion",
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
      buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'Copiar',
                            extend: 'copy'
                        }, {
                            extend: 'pdf',
                        }, {
                            extend: 'csv',
                        }, {
                            extend: 'excel',
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }
                        ]
                    },
                        {
                            extend: 'colvis',
                            text: 'Visor de columnas'
                        }
                    ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

//modal para registar subestación

<div class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Crear Subestacion</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre">nombre de la subestación</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                 
                    <div class="form-group">
                        <label for="ubicacion">Ubicación Georeferencial</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" readonly>
                        <div id="map" style="height: 300px; width: 100%; margin-top: 10px;"></div>
                    </div>
                
                    <div class="form-group">
                        <label for="nombre">potencia</label>
                        <input type="text" class="form-control" id="potencia" name="potencia">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Estado</label>
                        <select class="form-control" id="estado_subestacion" name="estado_subestacion">
                        <option value="ac">Activo</option>
                        <option value="in">Inactivo</option>
                        </select>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" id="btn-create">guardar</button>
              
            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div id="respuesta" ></div>

<script>
let map, marker;

function initMap() {
    const initialPosition = { lat: -12.0464, lng: -77.0428 }; // Coordenadas iniciales (ejemplo: Lima, Perú)
    
    // Inicializar el mapa
    map = new google.maps.Map(document.getElementById("map"), {
        center: initialPosition,
        zoom: 14,
    });

    // Añadir marcador inicial
    marker = new google.maps.Marker({
        position: initialPosition,
        map: map,
        draggable: true, // Permitir mover el marcador
    });

    // Actualizar el campo 'ubicacion' con las coordenadas del marcador
    updateLocationField(initialPosition);

    // Escuchar eventos de movimiento del marcador
    marker.addListener("dragend", (event) => {
        const position = {
            lat: event.latLng.lat(),
            lng: event.latLng.lng(),
        };
        updateLocationField(position);
    });

    // Escuchar clics en el mapa para mover el marcador
    map.addListener("click", (event) => {
        const position = {
            lat: event.latLng.lat(),
            lng: event.latLng.lng(),
        };
        marker.setPosition(position);
        updateLocationField(position);
    });
}

// Función para actualizar el campo 'ubicacion'
function updateLocationField(position) {
    const locationField = document.getElementById("ubicacion");
    locationField.value = `${position.lat}, ${position.lng}`;
}

// Iniciar el mapa al cargar la página
document.addEventListener("DOMContentLoaded", initMap);
</script>




<script>
        // Código para el evento click
        $('#btn-create').click(function () {
            //alert("guardar");
            var nombre = $("#nombre").val();
            //alert (nombre);
            var ubicacion = $("#ubicacion").val();
            var potencia = $("#potencia").val();
            var estado_subestacion = $("#estado_subestacion").val();
            var url ="../app/controllers/subestaciones/registro_subestacion.php";
            $.get (url, {nombre: nombre, ubicacion: ubicacion, potencia: potencia, estado_subestacion: estado_subestacion }, function(data){ 
              //alert ("fue al controlador");
              $('#respuesta').html(data)
              });
        });
</script>

