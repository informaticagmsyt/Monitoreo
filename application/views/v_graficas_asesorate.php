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
    var f = "<?php echo  $genero_f   = count($genero_f)?>";
    var m = "<?php echo  $genero_m   = count($genero_m)?>";
    var personal = "<?php echo $personal = count($personal)?>";
    var upf  = "<?php echo  $personal    = count($upf)?>";
    var eps  = "<?php echo  $eps  = count($eps)?>";
    var coop = "<?php echo  $coop = count($coop)?>";
    var ca   = "<?php echo  $ca   = count($ca)?>";
/************************************************************************************/
    var industrial   = "<?php echo  $industrial   = count($industrial)?>";
    var tecnologico  = "<?php echo  $tecnologico  = count($tecnologico)?>";
    var p_alimenticio  = "<?php echo  $p_alimenticio  = count($p_alimenticio)?>";
    var administrativo  = "<?php echo  $administrativo  = count($administrativo)?>";
    var p_atomotriz  = "<?php echo  $p_atomotriz  = count($p_atomotriz)?>";
    var p_electrico  = "<?php echo  $p_electrico  = count($p_electrico)?>";
    var p_refrigeracion  = "<?php echo  $p_refrigeracion  = count($p_refrigeracion)?>";
    var p_petroquimico  = "<?php echo  $p_petroquimico  = count($p_petroquimico)?>";
    var p_hidraulica  = "<?php echo  $p_hidraulica  = count($p_hidraulica)?>";
</script>
<script > 
    var nombres = ['Emprendimiento Personal', 'Unidad de Produccion Familiar', 'Empresa de Produccion Familiar ', 'Cooperativa', 'Compañia Anonima'];
    var valores = [personal,upf,eps,coop,ca];
/*******************************************************************************************************************************/ 
    var generos = ['Maculino', 'Femenino'];    
    var sexo = [f,m];
/*********************************************************************************************************************************/      
    var proyectos = ['Legal','Formacion','Tecnica','Administrativa'];
    var valor = [industrial,tecnologico,p_alimenticio,administrativo];
/************************************************************************************************************************************/     
</script>
  <section class="content">
    <div class="block-header">
                <h2>Graficas Estadisticas del  Programa Asesorate</h2>
            </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
                                        label: ' Grafico N° 1 Razon Social (Tipos de Emprendimiento)',
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
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
                                            'rgba(100, 100, 10, 0.5)'
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
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body bg-white">
                            
                        <canvas id="myChart3" width="200" height="200"></canvas>
                            <script>
                            var ctx = document.getElementById('myChart3').getContext('2d');
                            var myChart2 = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: proyectos ,
                                    datasets: [{
                                        label: ' Grafico N° 3 Tipo de Asesoramiento',
                                        data: valor,
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
