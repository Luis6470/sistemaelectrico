<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/listado_usuarios.php');

   //session_start(); 
   
   
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de Usuarios</h1>
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
                <h3 class="card-title">Usuario registrado</h3>

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
                        <th>nombre</th>
                        <th>correo</th>
                        <th>Nivel</th>
                        <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                        <?php
                        $contador=0;
                      foreach($result as $row) { 
                      $id_usuario = $row["id_usuario"]; ?>
                      <tr>
                      <td> <?php echo $contador=$contador+1;?></td>
                      <td> <?php echo $row["nombre"];?></td>
                      <td> <?php echo $row["email"];?></td>
                      <td> <?php echo $row["descripcion"];?></td>
                      <td> 
                      <div style="display: flex; justify-content: center; align-items: center;">
                            <div class="btn-group" >
                            <a href="show.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> Ver</a>
                            <a href="update.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i>Editar</a>
                            <a href="delete.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
                            </div>
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
                        <th>nombre</th>
                        <th>correo</th>
                        <th>Nivel</th>
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
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
          "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
          "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar_MENU_ Usuarios",
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
                            text: 'Visol de columnas'
                        }
                    ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>