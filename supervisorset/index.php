<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/supervisorset/listado_supervisorset.php');

   //session_start(); 
   
   
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de Supervisorset 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create"> <i class="fa fa-plus"></i>
            Agregar Supervisorset
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
                <h3 class="card-title">Supervisorset registrado</h3>

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
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Empresa</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                      <?php
                      $contador=0;
                      foreach($resultset as $row) { 
                      $id_supervisorset = $row["id_supervisorset"]; 
                      $nombre_sus = $row["nombre_sus"];
                      $apellidos_sus = $row["apellidos_sus"];
                      $email_sus = $row["email_sus"];
                      $celular_sus = $row["celular_sus"];
                      $empresa_sus = $row["empresa_sus"];
                      $estado_supervisorset = $row["estado_supervisorset"];?>
                      <tr>
                      <td> <?php echo $contador=$contador+1;?></td>
                      <td> <?php echo $row["nombre_sus"];?></td>
                      <td> <?php echo $row["apellidos_sus"];?></td>
                      <td> <?php echo $row["email_sus"];?></td>
                      <td> <?php echo $row["celular_sus"];?></td>
                      <td> <?php echo $row["empresa_sus"];?></td>
                      <td> <?php echo $row["estado_supervisorset"];?></td>
                      <td> 
                            <div style="display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update<?php echo $id_supervisorset;?>"> <i class="fa fa-pencil-alt"></i>
                            Editar supervisorset
                            </button>
                              
                            <div class="modal fade" id="modal-update<?php echo $id_supervisorset;?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Editar Supervisorset</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">

                                      <div class="col-md-12">
                                        
                                       
                                           <div class="form-group">
                                                <label for="nombre_sus<?php echo $id_supervisorset; ?>">Nombre </label>
                                                <input type="text" class="form-control" id="nombre_sus<?php echo $id_supervisorset; ?>" value="<?php echo $nombre_sus; ?>" name="nombre_sus">
                                            </div>
                                            <div class="form-group">
                                                <label for="apellido_suss<?php echo $id_supervisorset; ?>">apellidos</label>
                                                <input type="text" class="form-control" id="apellidos_sus<?php echo $id_supervisorset; ?>" value="<?php echo $apellidos_sus; ?>" name="apellidos_sus">
                                            </div>
                                            <div class="form-group">
                                                <label for="email_sus<?php echo $id_supervisorset; ?>">email</label>
                                                <input type="text" class="form-control" id="email_sus<?php echo $id_supervisorset; ?>" value="<?php echo $email_sus; ?>" name="email_sus">
                                            </div>

                                            <div class="form-group">
                                                <label for="celular_sus<?php echo $id_supervisorset; ?>">celular</label>
                                                <input type="text" class="form-control" id="celular_sus<?php echo $id_supervisorset; ?>" value="<?php echo $celular_sus; ?>" name="celular_sus">
                                            </div>

                                            <div class="form-group">
                                                <label for="empresa_sus<?php echo $id_supervisorset; ?>">empresa</label>
                                                <input type="text" class="form-control" id="empresa_sus<?php echo $id_supervisorset; ?>" value="<?php echo $empresa_sus; ?>" name="empresa_sus">
                                            </div>


                                          <div class="form-group">
                                              <label for="nombre">Estado</label>
                                              <select class="form-control" id="estado_supervisorset<?php echo $id_supervisorset;?>" name="estado_supervisorset">
                                              <option value="ac">Activo</option>
                                              <option value="in">Inactivo</option>
                                              </select>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-success" id='btn_update<?php echo $id_supervisorset;?>'>Editar</button>1
                                    
                                  </div>

                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                           
                            <script>

                              $('#btn_update<?php echo $id_supervisorset;?>').click(function () {
                                
                                  var nombre_sus = $("#nombre_sus<?php echo $id_supervisorset; ?>").val();
                                  var apellidos_sus = $("#apellidos_sus<?php echo $id_supervisorset; ?>").val();
                                  var email_sus = $("#email_sus<?php echo $id_supervisorset; ?>").val();
                                  var celular_sus = $("#celular_sus<?php echo $id_supervisorset; ?>").val();
                                  var empresa_sus = $("#empresa_sus<?php echo $id_supervisorset; ?>").val();
                                  var estado_supervisorset = $("#estado_supervisorset<?php echo $id_supervisorset; ?>").val();
                                  var url = "../app/controllers/supervisorset/update_supervisorset.php";

                                  $.get(url, {
                                      nombre_sus: nombre_sus,
                                      apellidos_sus: apellidos_sus,
                                      email_sus: email_sus,
                                      celular_sus: celular_sus,
                                      empresa_sus: empresa_sus,
                                      estado_supervisorset: estado_supervisorset,
                                      id_supervisorset: <?php echo $id_supervisorset; ?>
                                  }, function (data) {
                                      $('#respuesta-update<?php echo $id_supervisorset; ?>').html(data);
                                  });
                              });

                            </script>

                            <div class="modal fade" id="respuesta-update<?php echo $id_supervisorset; ?>" ></div>
                          
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
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Empresa</th>
                        <th>Estado</th>
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
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Supervisorset",
          "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
          "infoFiltered": "(Filtrado de _MAX_ total Supervisorset)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar_MENU_ Supervisorset",
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

//modal para registar supervisorset

<div class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Crear Supervisorset</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre">nombre</label>
                        <input type="text" class="form-control" id="nombre_sus" name="nombre_sus">
                    </div>
                 
                    <div class="form-group">
                        <label for="nombre">apellidos</label>
                        <input type="text" class="form-control" id="apellidos_sus" name="apellidos_sus">
                    </div>
                
                    <div class="form-group">
                        <label for="nombre">email</label>
                        <input type="text" class="form-control" id="email_sus" name="email_sus">
                    </div>

                    <div class="form-group">
                        <label for="nombre">celular</label>
                        <input type="text" class="form-control" id="celular_sus" name="celular_sus">
                    </div>

                    <div class="form-group">
                        <label for="nombre">empresa</label>
                        <input type="text" class="form-control" id="empresa_sus" name="empresa_sus">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Estado</label>
                        <select class="form-control" id="estado_supervisorset" name="estado_supervisorset">
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







<script>
        // Código para el evento click
        $('#btn-create').click(function () {
            //alert("guardar");
            var nombre_sus = $("#nombre_sus").val();
            //alert (nombre);
            var apellidos_sus = $("#apellidos_sus").val();
            var email_sus = $("#email_sus").val();
            var celular_sus = $("#celular_sus").val();
            var empresa_sus = $("#empresa_sus").val();
            var estado_supervisorset = $("#estado_supervisorset").val();

                                  if(nombre_sus == ''){
                                    alert('ingrese el nombre');
                                    $('#nombre_sus').focus();
                                    

                                  }else if(apellidos_sus == ''){
                                    alert('ingrese el apellido');
                                    $('#apellidos_sus').focus();
                                    
                                  }else if(email_sus == ''){  
                                    alert('ingrese el email');
                                    $('#email_sus').focus();
        
                                  } else if(celular_sus ==''){
                                    alert('ingrese el celular');
                                    $('#celular_sus').focus();
                                    
                                    } else if(empresa_sus == ''){ 
                                      alert('ingrese la empresa');
                                      $('#empresa_sus').focus();
                                      
                                    } else if(estado_supervisorset == ''){
                                      alert('ingrese el estado');
                                      $('#estado_supervisorset').focus();
                                      
                                      } else {

            var url ="../app/controllers/supervisorset/create_supervisorset.php";
            $.get (url, {nombre_sus: nombre_sus, apellidos_sus: apellidos_sus, email_sus: email_sus, celular_sus: celular_sus, empresa_sus: empresa_sus, estado_supervisorset: estado_supervisorset }, function(data){ 
              //alert ("fue al controlador");
              $('#respuesta').html(data)
              });
        }});
</script>

<div id="respuesta"></div>

