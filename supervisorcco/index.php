<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/supervisorcco/listado_supervisorcco.php');

   //session_start(); 
   
   
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de Supervisorcco 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create"> <i class="fa fa-plus"></i>
            Agregar Supervisorcco
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
                <h3 class="card-title">Supervisorcco registrado</h3>

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
                      foreach($resultcco as $row) { 
                      $id_supervisorcco = $row["id_supervisorcco"]; 
                      $nombre_suc = $row["nombre_suc"];
                      $apellidos_suc = $row["apellidos_suc"];
                      $email_suc = $row["email_suc"];
                      $celular_suc = $row["celular_suc"];
                      $empresa_suc = $row["empresa_suc"];
                      $estado_supervisorcco = $row["estado_supervisorcco"];?>
                      <tr>
                      <td> <?php echo $contador=$contador+1;?></td>
                      <td> <?php echo $row["nombre_suc"];?></td>
                      <td> <?php echo $row["apellidos_suc"];?></td>
                      <td> <?php echo $row["email_suc"];?></td>
                      <td> <?php echo $row["celular_suc"];?></td>
                      <td> <?php echo $row["empresa_suc"];?></td>
                      <td> <?php echo $row["estado_supervisorcco"];?></td>
                      <td> 
                            <div style="display: flex; justify-content: center; align-items: center;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update<?php echo $id_supervisorcco;?>"> <i class="fa fa-pencil-alt"></i>
                            Editar Supervisorcco
                            </button>
                              
                            <div class="modal fade" id="modal-update<?php echo $id_supervisorcco;?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Editar Supervisorcco</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">

                                      <div class="col-md-12">
                                        
                                       
                                           <div class="form-group">
                                                <label for="nombre<?php echo $id_supervisorcco; ?>">Nombre </label>
                                                <input type="text" class="form-control" id="nombre_suc<?php echo $id_supervisorcco; ?>" value="<?php echo $nombre_suc; ?>" name="nombre">
                                            </div>
                                            <div class="form-group">
                                                <label for="apellidos<?php echo $id_supervisorcco; ?>">apellidos</label>
                                                <input type="text" class="form-control" id="apellidos_suc<?php echo $id_supervisorcco; ?>" value="<?php echo $apellidos_suc; ?>" name="apellidos">
                                            </div>
                                            <div class="form-group">
                                                <label for="email<?php echo $id_supervisorcco; ?>">email</label>
                                                <input type="text" class="form-control" id="email_suc<?php echo $id_supervisorcco; ?>" value="<?php echo $email_suc; ?>" name="email">
                                            </div>

                                            <div class="form-group">
                                                <label for="celular<?php echo $id_supervisorcco; ?>">celular</label>
                                                <input type="text" class="form-control" id="celular_suc<?php echo $id_supervisorcco; ?>" value="<?php echo $celular_suc; ?>" name="celular">
                                            </div>

                                            <div class="form-group">
                                                <label for="empresa<?php echo $id_supervisorcco; ?>">empresa</label>
                                                <input type="text" class="form-control" id="empresa_suc<?php echo $id_supervisorcco; ?>" value="<?php echo $empresa_suc; ?>" name="empresa">
                                            </div>


                                          <div class="form-group">
                                              <label for="nombre">Estado</label>
                                              <select class="form-control" id="estado_supervisorcco<?php echo $id_supervisorcco;?>" name="estado_supervisorcco">
                                              <option value="ac">Activo</option>
                                              <option value="in">Inactivo</option>
                                              </select>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-success" id='btn_update<?php echo $id_supervisorcco;?>'>Editar</button>
                                    
                                  </div>

                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                           
                            <script>

                              $('#btn_update<?php echo $id_supervisorcco;?>').click(function () {
                                alert(<?php echo $id_supervisorcco;?>);
                                  var nombre_suc = $("#nombre_suc<?php echo $id_supervisorcco; ?>").val();
                                  var apellidos_suc = $("#apellidos_suc<?php echo $id_supervisorcco; ?>").val();
                                  var email_suc = $("#email_suc<?php echo $id_supervisorcco; ?>").val();
                                  var celular_suc = $("#celular_suc<?php echo $id_supervisorcco; ?>").val();
                                  var empresa_suc = $("#empresa_suc<?php echo $id_supervisorcco; ?>").val();
                                  var estado_supervisorcco = $("#estado_supervisorcco<?php echo $id_supervisorcco; ?>").val();
                                  var url = "../app/controllers/supervisorcco/update_supervisorcco.php";
                                  $.get(url, {
                                      nombre_suc: nombre_suc,
                                      apellidos_suc: apellidos_suc,
                                      email_suc: email_suc,
                                      celular_suc: celular_suc,
                                      empresa_suc: empresa_suc,
                                      estado_supervisorcco: estado_supervisorcco,
                                      id_supervisorcco: <?php echo $id_supervisorcco; ?>
                                  }, function (data) {
                                      $('#respuesta-update<?php echo $id_supervisorcco; ?>').html(data);
                                  });
                              });

                            </script>

                            <div class="modal fade" id="respuesta-update<?php echo $id_supervisorcco; ?>" ></div>
                          
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
              <h4 class="modal-title">Crear Supervisorcco</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre">nombre</label>
                        <input type="text" class="form-control" id="nombre_suc" name="nombre_suc">
                    </div>
                 
                    <div class="form-group">
                        <label for="nombre">apellidos</label>
                        <input type="text" class="form-control" id="apellidos_suc" name="apellidos_suc">
                    </div>
                
                    <div class="form-group">
                        <label for="nombre">email</label>
                        <input type="text" class="form-control" id="email_suc" name="email_suc">
                    </div>

                    <div class="form-group">
                        <label for="nombre">celular</label>
                        <input type="text" class="form-control" id="celular_suc" name="celula_suc">
                    </div>

                    <div class="form-group">
                        <label for="nombre">empresa</label>
                        <input type="text" class="form-control" id="empresa_suc" name="empresa_suc">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Estado</label>
                        <select class="form-control" id="estado_supervisorcco" name="estado_supervisorcco">
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
            var nombre_suc = $("#nombre_suc").val();
            //alert (nombre);
            var apellidos_suc = $("#apellidos_suc").val();
            var email_suc = $("#email_suc").val();
            var celular_suc = $("#celular_suc").val();
            var empresa_suc = $("#empresa_suc").val();
            var estado_supervisorcco = $("#estado_supervisorcco").val();

                                  if(nombre_suc == ''){
                                    alert('ingrese el nombre');
                                    $('#nombre_suc').focus();
                                    

                                  }else if(apellidos_suc == ''){
                                    alert('ingrese el apellido');
                                    $('#apellidos_suc').focus();
                                    
                                  }else if(email_suc == ''){  
                                    alert('ingrese el email');
                                    $('#email_suc').focus();
        
                                  } else if(celular_suc ==''){
                                    alert('ingrese el celular');
                                    $('#celular_suc').focus();
                                    
                                    } else if(empresa_suc ==''){
                                      alert('ingrese la empresa');
                                      $('#empresa_suc').focus();
                                      
                                    } else if(estado_supervisorcco == ''){
                                      alert('ingrese el estado');
                                      $('#estado_supervisorcco').focus();
                                      
                                      } else {

            var url ="../app/controllers/supervisorcco/create_supervisorcco.php";
            $.get (url, {nombre_suc: nombre_suc, apellidos_suc: apellidos_suc, email_suc: email_suc, celular_suc :celular_suc, empresa_suc: empresa_suc, estado_supervisorcco: estado_supervisorcco }, function(data){ 
              //alert ("fue al controlador");
              $('#respuesta').html(data)
              });
        }});
</script>

<div id="respuesta" ></div>

