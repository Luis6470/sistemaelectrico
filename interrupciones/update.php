<?php
include('../app/config.php');
include('../layout/session.php');
include('../layout/parte1.php');
include('../app/controllers/alimentadores/listado_alimentadores.php');
include('../app/controllers/subestaciones/listado_subestaciones.php');
include('../app/controllers/supervisorcco/listado_supervisorcco.php');
include('../app/controllers/supervisorset/listado_supervisorset.php');
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
            <h1 class="m-0">Editar Interrupciones</h1>
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
                <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Actualizar Interrupcion</h3>

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
                <button type="button" class="btn btn-primary" data-toggle="modal" 
                data-target="#modal-buscar_alimentador"> <i class="fa fa-search"></i>
                Buscar Alimentador</button>


            <div class="modal fade" id="modal-buscar_alimentador">
               <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #007bff;color : white">
                    <h4 class="modal-title">Buscar Alimentador</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <div class ="table table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr> 
                        <th>ID</th>
                        <th>Accion</th>
                        <th>Codigo</th>
                        <th>marca</th>
                        <th>descripción</th>
                        <th>nivel de tension</th>
                        <th>subestacion</th>
                        <th>email</th>
                        <th>fecha registro</th>


                        
                  </tr>
                  </thead>
                  <tbody>

                        <?php
                        $contador=0;
                      foreach($resulta as $row) { 
                      $id_alimentador = $row["id_alimentador"]; ?>
                      <tr>
                      <td> <?php echo $contador=$contador+1;?></td>
                      <td> 
                        <button type="" class="btn btn-info" id="btn_seleccionar<?php echo $id_alimentador;?>">Seleccionar</button>
                        <script >
                          $('#btn_seleccionar<?php echo $id_alimentador;?>').click(function(){
                            var id_alimentador = "<?php echo $row['id_alimentador'];?>";
                            $('#id_alimentador').val(id_alimentador);
                            var codigo = "<?php echo $row['codigo'];?>";
                            $('#codigo').val(codigo);
                            var marca = "<?php echo $row['marca'];?>";
                            $('#marca').val(marca);
                            var zona = "<?php echo $row['zona'];?>";
                            $('#zona').val(zona);
                            var nivel_tension = "<?php echo $row['nivel_tension'];?>";
                            $('#nivel_tension').val(nivel_tension);
                            var nombre = "<?php echo $row['nombre'];?>";
                            $('#nombre').val(nombre);
                            var email = "<?php echo $row['email'];?>";
                            $('#email').val(email);
                            var estado_alimentador = "<?php echo $row['estado_alimentador'];?>";
                            $('#estado_alimentador').val(estado_alimentador);
                            var fecha_registro = "<?php echo $row['fecha_registro'];?>";
                            $('#fecha_registro').val(fecha_registro);
                            $('#modal-buscar_alimentador').modal('toggle');
                          });
                        </script>
                      </td>
                      <td> <?php echo $row["codigo"];?></td>
                      <td> <?php echo $row["marca"];?></td>
                      <td> <?php echo $row["zona"];?></td>
                      <td> <?php echo $row["nivel_tension"];?></td>
                      <td> <?php echo $row["nombre"];?></td>
                      <td> <?php echo $row["email"];?></td>
                      <td> <?php echo $row["fecha_registro"];?></td>
                      
                      </tr>
                      <?php
                      }
                                            
                      ?>
                      </tbody>

                  
                  <tfoot>
                  <tr>
                        <th>ID</th>
                        <th>Accion</th>
                        <th>Codigo</th>
                        <th>marca</th>
                        <th>descripción</th>
                        <th>nivel de tension</th>
                        <th>subestacion</th>
                        <th>email</th>
                        <th>fecha registro</th>
                        
                  </tr>
                  </tfoot>
                </table>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            </div>



               </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class ="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                    <input type="text" class="form-control" value= "<?php echo $id_alimentador;?>" id="id_alimentador"hidden>
                                    <label for="">Código </label>
                                    <input type="text" class="form-control" value= "<?php echo $codigo;?>" id="codigo" disabled >
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Subestación </label>
                                    <input type="text" class="form-control" value= "<?php echo $nombre_subestacion;?>"  id="nombre" disabled >
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Marca </label>
                                    <input type="text" class="form-control"value= "<?php echo $marca;?>"  id="marca" disabled >
                                </div>
                            </div>           
                        </div>
                        <div class ="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Usuario </label>
                                    <input type="text" class="form-control"value= "<?php echo $email;?>"  id="email" name="codigo" disabled>
                                    
                                </div>
                            </div>    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for=""> Nivel de Tensión</label>
                                    <input type="text" class="form-control" value= "<?php echo $nivel_tension;?>" id="nivel_tension" disabled >
                                </div>
                            </div>   
                            <div class="col-md-2">
                                <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado_alimentador" name="estado_supervisorcco" disabled>
                                                <option value="ac" <?php echo $estado_alimentador == 'ac' ? 'selected' : ''; ?>>Activo</option>
                                                <option value="in" <?php echo $estado_alimentador == 'in' ? 'selected' : ''; ?>>Inactivo</option>
                                </select>
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
                          <button type="button" class="btn btn-primary" data-toggle="modal" 
                          data-target="#modal-buscar_supervisorcco"> <i class="fa fa-search"></i>
                          Buscar Supervisorcco</button>

                          <div class="modal fade" id="modal-buscar_supervisorcco">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: #007bff;color : white">
                                  <h4 class="modal-title">Buscar Supervisorcco</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <div class ="table table-responsive">
                              <table id="example2" class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr> 
                                        <th>ID</th>
                                        <th>Seleccionar</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Empresa</th>
                                        <th>Estado</th>
                                        <th>Fecha de Registro</th>
                                      
                                      </tr>
                                    </thead>
                                <tbody>

                                    <?php
                                    $contador=0;
                                    foreach($resultcco as $row1) { 
                                    $id_supervisorcco = $row1["id_supervisorcco"];  ?>
                                    <tr>
                                    <td> <?php echo $contador=$contador+1;?></td>
                                    <td> 
                                      <button type="" class="btn btn-info" id="btn_seleccionar1<?php echo $id_supervisorcco;?>">Seleccionar</button>
                                      <script >
                                        $('#btn_seleccionar1<?php echo $id_supervisorcco;?>').click(function(){
                                          var id_supervisorcco =" <?php echo $row1['id_supervisorcco'];?>";
                                          $('#id_supervisorcco').val(id_supervisorcco);
                                          var nombre_suc = "<?php echo $row1['nombre_suc'];?>";
                                          $('#nombre_suc').val(nombre_suc);
                                          var apellidos_suc  = "<?php echo $row1['apellidos_suc'];?>";
                                          $('#apellidos_suc').val(apellidos_suc);
                                         var email_suc = "<?php echo $row1['email_suc'];?>";
                                          $('#email_suc').val(email_suc);
                                          var celular_suc = "<?php echo $row1['celular_suc'];?>";
                                          $('#celular_suc').val(celular_suc);
                                          var empresa_suc = "<?php echo $row1['empresa_suc'];?>";
                                          $('#empresa_suc').val(empresa_suc);
                                          
                                          var estado_supervisorcco = "<?php echo $row1['estado_supervisorcco'];?>";
                                          $('#estado_supervisorcco').val(estado_supervisorcco);
                                          var fecha_registro = "<?php echo $row1['fecha_registro'];?>";
                                          $('#fecha_registro').val(fecha_registro);
                                          $('#modal-buscar_supervisorcco').modal('toggle');
                                        });
                                      </script>
                                    </td>
                                    <td> <?php echo $row1["nombre_suc"];?></td>
                                    <td> <?php echo $row1["apellidos_suc"];?></td>
                                    <td> <?php echo $row1["email_suc"];?></td>
                                    <td> <?php echo $row1["celular_suc"];?></td>
                                    <td> <?php echo $row1["empresa_suc"];?></td>
                                    <td> <?php echo $row1["estado_supervisorcco"];?></td>
                                    <td> <?php echo $row1["fecha_registro"];?></td>
                                    
                                    </tr>
                                    <?php
                                    }
                                                          
                                    ?>
                                    </tbody>

                                
                                <tfoot>
                                <tr>
                                        <th>ID</th>
                                        <th>Seleccionar</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Empresa</th>
                                        <th>Estado</th>
                                        <th>Fecha de Registro</th>
                                        
                                      
                                </tr>
                                </tfoot>
                              </table>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          </div>
                          
                          
                                  </div>
                                <div class="row">
                              <div class="col-md-12">
                                <div class="row mb-3">
                                  <!-- Nombre -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <input type="text" class="form-control" value= "<?php echo $id_supervisorcco;?>" id="id_supervisorcco" hidden>
                                      <label for="nombre">Nombre</label>
                                      <input type="text" class="form-control" value= "<?php echo $nombre_suc;?>"  id="nombre_suc" name="nombre_suc"disabled>
                                    </div>
                                  </div>

                                  <!-- Apellidos -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="apellidos">Apellidos</label>
                                      <input type="text" class="form-control"value= "<?php echo $apellidos_suc;?>"  id="apellidos_suc" name="apellidos_suc"disabled>
                                    </div>
                                  </div>

                                  <!-- Email -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="email">Email</label>
                                      <input type="text" class="form-control" value= "<?php echo $email_suc;?>"  id="email_suc" name="email_suc"disabled>
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <!-- Celular -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="celular">Celular</label>
                                      <input type="text" class="form-control" value= "<?php echo $celular_suc;?>"  id="celular_suc" name="celular_suc"disabled>
                                    </div>
                                  </div>

                                  <!-- Empresa -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="empresa">Empresa</label>
                                      <input type="text" class="form-control" value= "<?php echo $empresa_suc;?>"  id="empresa_suc" name="empresa_suc"disabled>
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

                                        
                            
                            <hr>
                        <div style="display: flex">
                           <h5 > Datos del Supervisorset</h5>
                          <div style="width : 20px"> </div>
                          <button type="button" class="btn btn-primary" data-toggle="modal" 
                          data-target="#modal-buscar_supervisorset"> <i class="fa fa-search"></i>
                          Buscar Supervisorset</button>

                          <div class="modal fade" id="modal-buscar_supervisorset">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: #007bff;color : white">
                                  <h4 class="modal-title">Buscar Supervisorset</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <div class ="table table-responsive">
                              <table id="example3" class="table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr> 
                                        <th>ID</th>
                                        <th>Seleccionar</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Empresa</th>
                                        <th>Estado</th>
                                        <th>Fecha de Registro</th>
                                      
                                      </tr>
                                    </thead>
                                <tbody>

                                    <?php
                                    $contador=0;
                                    foreach($resultset as $row1) { 
                                    $id_supervisorset = $row1["id_supervisorset"];  ?>
                                    <tr>
                                    <td> <?php echo $contador=$contador+1;?></td>
                                    <td> 
                                      <button type="" class="btn btn-info" id="btn_seleccionar2<?php echo $id_supervisorset;?>">Seleccionar</button>
                                      <script >
                                        $('#btn_seleccionar2<?php echo $id_supervisorset;?>').click(function(){
                                          var id_supervisorset =" <?php echo $row1['id_supervisorset'];?>";
                                          $('#id_supervisorset').val(id_supervisorset);
                                          var nombre_sus = "<?php echo $row1['nombre_sus'];?>"; 
                                          $('#nombre_sus').val(nombre_sus);
                                          var apellidos_sus  = "<?php echo $row1['apellidos_sus'];?>";
                                          $('#apellidos_sus').val(apellidos_sus);
                                         var email_sus = "<?php echo $row1['email_sus'];?>";
                                          $('#email_sus').val(email_sus);
                                          var celular_sus = "<?php echo $row1['celular_sus'];?>";
                                          $('#celular_sus').val(celular_sus);
                                          var empresa_sus = "<?php echo $row1['empresa_sus'];?>";
                                          $('#empresa_sus').val(empresa_sus);
                                          
                                          var estado_supervisorset = "<?php echo $row1['estado_supervisorset'];?>";
                                          $('#estado_supervisorset').val(estado_supervisorset);
                                          var fecha_registro = "<?php echo $row1['fecha_registro'];?>";
                                          $('#fecha_registro').val(fecha_registro);
                                          $('#modal-buscar_supervisorset').modal('toggle');
                                        });
                                      </script>
                                    </td>
                                    <td> <?php echo $row1["nombre_sus"];?></td>
                                    <td> <?php echo $row1["apellidos_sus"];?></td>
                                    <td> <?php echo $row1["email_sus"];?></td>
                                    <td> <?php echo $row1["celular_sus"];?></td>
                                    <td> <?php echo $row1["empresa_sus"];?></td>
                                    <td> <?php echo $row1["estado_supervisorset"];?></td>
                                    <td> <?php echo $row1["fecha_registro"];?></td>
                                    
                                    </tr>
                                    <?php
                                    }
                                                          
                                    ?>
                                    </tbody>

                                
                                <tfoot>
                                <tr>
                                        <th>ID</th>
                                        <th>Seleccionar</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Empresa</th>
                                        <th>Estado</th>
                                        <th>Fecha de Registro</th>
                                        
                                      
                                </tr>
                                </tfoot>
                              </table>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          </div>
                          
                          
                                  </div>
                                <div class="row">
                              <div class="col-md-12">
                                <div class="row mb-3">
                                  <!-- Nombre -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                    <input type="text" class="form-control" value= "<?php echo $id_supervisorset;?>" id="id_supervisorset"hidden>
                                      <label for="nombre">Nombre</label>
                                      <input type="text" class="form-control" value= "<?php echo $nombre_sus;?>" id="nombre_sus" name="nombre_sus"disabled>
                                    </div>
                                  </div>

                                  <!-- Apellidos -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="apellidos">Apellidos</label>
                                      <input type="text" class="form-control"value= "<?php echo $apellidos_suc;?>" id="apellidos_sus" name="apellidos_sus" disabled>
                                    </div>
                                  </div>

                                  <!-- Email -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="email">Email</label>
                                      <input type="text" class="form-control" value= "<?php echo $email_suc;?>" id="email_sus" name="email_sus"disabled>
                                    </div>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <!-- Celular -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="celular">Celular</label>
                                      <input type="text" class="form-control"  value= "<?php echo $celular_suc;?>"id="celular_sus" name="celular_sus" disabled>
                                    </div>
                                  </div>

                                  <!-- Empresa -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="empresa">Empresa</label>
                                      <input type="text" class="form-control" value= "<?php echo $empresa_suc;?>" id="empresa_sus" name="empresa_sus"disabled>
                                    </div>
                                  </div>

                                  <!-- Estado -->
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="estado_supervisorset">Estado</label>
                                      <select class="form-control" id="estado_supervisorcco" name="estado_supervisorcco" disabled>
                                                <option value="ac" <?php echo $estado_supervisorset == 'ac' ? 'selected' : ''; ?>>Activo</option>
                                                <option value="in" <?php echo $estado_supervisorset == 'in' ? 'selected' : ''; ?>>Inactivo</option>
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
                <h3 class="card-title">Datos de Interrupción</h3>

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
                                      <div class="col-md-2">
                                        <div class="form-group">
                                         
                                          <label for="">Numero de ocurrencia</label>
                                          <input type="text" class="form-control" value="<?php echo $nro_interrupcion;?>" id="nro_interrupcion"  >
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
                                <input type="text" class="form-control" value="<?php echo $hora_inicio;?>" id="hora_inicio" placeholder="HH:MM:SS" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hora_fin">Hora fin</label>
                                <input type="text" class="form-control" value="<?php echo $hora_fin;?>" id="hora_fin" placeholder="HH:MM:SS">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duracion">Duración</label>
                                <input type="text" class="form-control" value="<?php echo $duracion;?>"id="duracion" disabled>
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
                                          <input type="date" class="form-control" value="<?php echo $fecha_registro;?>" id="fecha_registro" >
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="potencia_interrumpida">Potencia Interrumpida(Mw)</label>
                                          <input type="number" class="form-control" value="<?php echo $potencia_interrumpida;?>" id="potencia_interrumpida" step="0.01" min="0" placeholder="Ingrese un valor">
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="">Protección</label>
                                          <input type="text" class="form-control" value="<?php echo $proteccion;?>" id="proteccion" name="proteccion">
                                        </div>
                                      </div>
                                    
                         </div>
                        <div class="row">
                                  <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="">causa</label>
                                          <input type="text" class="form-control" value="<?php echo $causa;?>" id="causa" >
                                        </div>
                                      </div>

                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="potencia_interrumpida">Zona afectada</label>
                                          <input type="text" class="form-control" value="<?php echo $zona_afectada;?>" id="zona_afectada">
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group">
                                          <label for=" ">Estado</label>
                                          <select class="form-control" id="estado_interrupcion" name="estado_supervisorcco" >
                                                <option value="ac" <?php echo $estado_interrupcion == 'ac' ? 'selected' : ''; ?>>Activo</option>
                                                <option value="in" <?php echo $estado_interrupcion == 'in' ? 'selected' : ''; ?>>Inactivo</option>
                                    </select>
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="">Descripcion</label>
                                          <textarea class="form-control" id="descripcion" ><?php echo $descripcion; ?></textarea>
                                        </div>
                                      </div>
                          </div>
                          <hr>
                          <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                          <button type="submit" id="btn_actualizar_interrupcion" class="btn btn-success">Actualizar Interrupcion</button>
                                        </div>
                                      </div>
                                      <script> 
                                      $("#btn_actualizar_interrupcion").click(function(){
                                        alert('funciona');
                                        var nro_interrupcion = <?php echo $nro_interrupcion; ?>;
                                        var hora_inicio = $('#hora_inicio').val();
                                        var hora_fin = $('#hora_fin').val();
                                        var duracion = $('#duracion').val();
                                        var fecha_registro = $ ('#fecha_registro').val();
                                        var potencia_interrumpida = $('#potencia_interrumpida').val();
                                         var proteccion = $('#proteccion').val();
                                        var causa = $('#causa').val();
                                        var zona_afectada = $('#zona_afectada').val();
                                        var estado_interrupcion = $('#estado_interrupcion').val();
                                        var descripcion = $('#descripcion').val();
                                        var id_interrupcion = <?php echo $id_interrupcion;?>;
                                        var id_alimentador = <?php echo $id_alimentador;?>;
                                        var id_supervisorcco = <?php echo $id_supervisorcco;?>;
                                        var id_supervisorset = <?php echo $id_supervisorset;?>;
                                        var id_usuario = <?php echo $id_usuario_sesion;?>;
                                        alert(nro_interrupcion);

                                        if (hora_inicio == "") {
                                          alert('Debe llenar la hora de inicio');
                                          $('#id_hora_inicio').focus();
                                      } else if (hora_fin == "") {
                                          alert('Debe llenar la hora de fin');
                                          $('#id_hora_fin').focus();
                                      } else if (fecha_registro == "") {
                                          alert('Debe llenar la fecha');
                                          $('#fecha_registro').focus();
                                      } else if (potencia_interrumpida == "") {
                                          alert('Debe llenar la potencia interrumpida');
                                          $('#potencia_interrumpida').focus();
                                      } else if (proteccion == "") {
                                          alert('Debe llenar la protección');
                                          $('#proteccion').focus();
                                      } else if (causa == "") {
                                          alert('Debe llenar la causa');
                                          $('#causa').focus();
                                      } else if (zona_afectada == "") {
                                          alert('Debe llenar la zona afectada');
                                          $('#zona_afectada').focus();
                                      } else if (estado_interrupcion == "") {
                                        console.log("Estado interrupción está vacío");
                                        alert('Debe llenar el estado de la interrupción');
                                        
                                          $('#estado_interrupcion').focus();
                                      } else if (descripcion == "") {
                                        console.log("Estado interrupción está vacío");
                                        alert('Debe llenar la descripción');
                                        
                                          $('#descripcion').focus();
                                      } else {
                                          // Realizar la solicitud AJAX
                                          var url = "../app/controllers/interrupciones/update_interrupcion.php";
                                          $.get(url, {
                                              nro_interrupcion: nro_interrupcion,
                                              hora_inicio: hora_inicio,
                                              hora_fin: hora_fin,
                                              duracion: duracion,
                                              fecha_registro: fecha_registro,
                                              potencia_interrumpida: potencia_interrumpida,
                                              proteccion: proteccion,
                                              causa: causa,
                                              zona_afectada: zona_afectada,
                                              descripcion: descripcion,
                                              estado_interrupcion: estado_interrupcion,
                                              id_alimentador: id_alimentador,
                                              id_supervisorset: id_supervisorset,
                                              id_supervisorcco : id_supervisorcco,
                                              id_usuario : id_usuario,
                                              id_interrupcion : id_interrupcion

                                          }, function (data) {
                                              alert("Datos enviados al controlador");
                                              $('#respuesta_update').html(data); // Si necesitas mostrar una respuesta en el DOM
                                          }).fail(function () {
                                              alert("Hubo un error al enviar los datos");
                                          });
                                      }


                                      })
                                      </script>
                          </div>
                          
                </div>
              </div>
              <div id='respuesta_update'></div>
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
  $(function () {
    $("#example3").DataTable({
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
     
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>










