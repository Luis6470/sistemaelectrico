<?php
include('app/config.php');
include('layout/session.php');
include('layout/parte1.php');
include('app/controllers/usuarios/listado_usuarios.php');
include('app/controllers/parametro/listado_parametros.php');
include('app/controllers/alimentadores/listado_alimentadores.php');
include('app/controllers/interrupciones/listado_interrupcion.php');
include('app/controllers/interrupciones/graficos.php');
include('app/controllers/mantenimiento/listado_mantenimiento.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bienvenidos al SISTEMA ELÉCTRICO - <?php echo $descripcion_sesion ;?></h1>
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
            Contenido del SISTEMA
            <br><br>
          <!-- ./col -->
          <div class="row">
          
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                $contador_usuarios= 0;
                foreach($result as $row)
                $contador_usuarios ++;
                ?>
                <h3><?php echo  $contador_usuarios; ?></h3>

                <p>Usuarios Registrados</p>
              </div>
              <a href="<?php echo $URL;?>/usuarios/crear.php">
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              </a>
              <a href="<?php echo $URL;?>/usuarios" class="small-box-footer" >
                Mas Infomación <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
              <div class="inner">
                <?php
                $contador_parametros= 0;
                foreach($resultp as $row)
                $contador_parametros ++;
                ?>
                <h3><?php echo  $contador_parametros; ?></h3>

                <p>Listado de Parametros</p>
              </div>
              <a href="<?php echo $URL;?>/parametro/create.php">
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              </a>
              <a href="<?php echo $URL;?>/parametro" class="small-box-footer" >
                Mas Infomación <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
          <div class="small-box bg-primary">
              <div class="inner">
                <?php
                $contador_alimentadores= 0;
                foreach($resulta as $row)
                $contador_alimentadores ++;
                ?>
                <h3><?php echo  $contador_alimentadores; ?></h3>

                <p>Listado de Alimentadores</p>
              </div>
              <a href="<?php echo $URL;?>/alimentadores/create.php">
              <div class="icon">
            <i class="fas fa fa-lightbulb"></i>
                
              </div>
              </a>
              <a href="<?php echo $URL;?>/alimentadores" class="small-box-footer" >
                Mas Infomación <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
              <div class="inner">
                <?php
                $contador_interrupciones= 0;
                foreach($resultai as $row)
                $contador_interrupciones ++;
                ?>
                <h3><?php echo  $contador_interrupciones; ?></h3>

                <p>Listado de interrupciones</p>
              </div>
              <a href="<?php echo $URL;?>/interrupciones/create.php">
              <div class="icon">
                <i class="fas fa-plug"></i>  
              </div>
              </a>
              <a href="<?php echo $URL;?>/interrupciones" class="small-box-footer" >
                Mas Infomación <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
              <div class="inner">
                <?php
                $contador_mantenimientos= 0;
                foreach($resultam as $row)
                $contador_mantenimientos ++;
                ?>
                <h3><?php echo  $contador_mantenimientos; ?></h3>

                <p>Listado de Mantenimientos</p>
              </div>
              <a href="<?php echo $URL;?>/mantenimiento/create.php">
              <div class="icon">
                <i class="fas fa-calendar"></i>
              </div>
              </a>
              <a href="<?php echo $URL;?>/mantenimiento" class="small-box-footer" >
                Mas Infomación <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

        </div>
        
        <div class="row">
  <!-- Area Chart -->
  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Grafico Area</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- Donut Chart -->
  <div class="col-md-6">
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Grafico Circular</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- /.row -->
        </div><!-- /.container-fluid -->
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
include('layout/parte2.php');
?>

<script> 
$(function () {
  var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : interrupcionesLabels,
      datasets: [
        {
          label               : 'Interrupciones registradas',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : interrupcionesData,
        },
        
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })



    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: interrupcionesLabels,
      datasets: [
        {
          data: interrupcionesData,
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })
  })

</script>

<script>
  var interrupcionesLabels = <?php echo json_encode($labels); ?>;
  var interrupcionesData = <?php echo json_encode($data); ?>;
</script>







 