<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>
 <body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Por Favor Espere...</p>
        </div>
    </div>
<script type="text/javascript">
    var uno = "<?php echo  $agro      = count($agro)?>";
    var dos = "<?php echo  $asesorate = count($asesorate)?>";
    var tres = "<?php echo  $brigadas = count($brigadas)?>";
    var cuatro = "<?php echo  $emprende  = count($emprende)?>";
    var cinco = "<?php echo  $ingenio    = count($ingenio)?>";
    var f = "<?php echo  $genero_f   = count($genero_f)?>";
    var m = "<?php echo  $genero_m   = count($genero_m)?>";
</script>
  <script >
   
     var nombres = ['Gestion Productiva', 'Plan Asesorate', 'Brigadas Tecnicas', 'Joven Emprendedor', 'Proyecto Ingenio'];
     var valores = [uno,dos,tres,cuatro,cinco];
     var generos = ['Mujeres', 'Hombres'];
     var sexo = [f,m];
  </script>
  <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body bg-white">
                            
                        <canvas id="myChart" width="200" height="200"></canvas>
                            <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: nombres ,
                                    datasets: [{
                                        label: ' Grafico N° 1 Personas Registradas',
                                        data: valores,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.5)',
                                            'rgba(54, 162, 235, 0.5)',
                                            'rgba(255, 206, 86, 0.5)',
                                            'rgba(75, 192, 192, 0.5)',
                                            'rgba(153, 102, 255,0.5)',
                                            'rgba(255, 159, 64, 0.5)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>

                </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body bg-white">
                            
                        <canvas id="myChart2" width="200" height="200"></canvas>
                            <script>
                            var ctx = document.getElementById('myChart2').getContext('2d');
                            var myChart2 = new Chart(ctx, {
                                type: 'pie',
                                data: {
                                    labels: generos ,
                                    datasets: [{
                                        label: ' Grafico N° 2 Genero',
                                        data: sexo,
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.5)',
                                            'rgba(54, 162, 235, 0.5)',
                                            'rgba(255, 206, 86, 0.5)',
                                            'rgba(75, 192, 192, 0.5)',
                                            'rgba(153, 102, 255,0.5)',
                                            'rgba(255, 159, 64, 0.5)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- #END# No Header Card -->
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row clearfix">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">

        </div>
            </div>
            </div>
        </div>
    </section>
