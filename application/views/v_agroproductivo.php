<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

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
    <div class="overlay"></div>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de Peronas Registradas en el Programa Agropoductivo
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" ">
                                    <thead>
                                        <tr>
                                            <th scope=" col" style="font-family: 'Dancing Script', cursive;">Cedula</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Nombres</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Apellidos</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Sexo</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Fecha de Nacimiento</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Telefono</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Email</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Estado</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Municipio</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Parroquia</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Localidad</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Direccion</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Espacio Social</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Movimiento</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Grado Instruccion</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Oficio</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Trabaja</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Pertenece</th>
                                    <th scope="col" style="font-family: 'Dancing Script', cursive;">Editar</th>

                                    </tr>
                                    </thead>
                                    <tbody class="normal">  
                                                <?php
                                    foreach ($listado as $listar) {
                                ?>
                                  <tr>
                                        <th scope="row"><?php echo $listar->cedula;?></th>
                                        <td><?php echo strtolower($listar->nombre);?></td>
                                        <td><?php echo strtolower($listar->apellido);?></td>
                                        <td><?php echo strtolower($listar->sexo);?></td>
                                        <td><?php echo strtolower($listar->f_nacimiento);?></td>
                                        <td><?php echo strtolower($listar->telefono);?></td>
                                        <td><?php echo strtolower($listar->email);?></td>
                                        <td><?php echo strtolower($listar->estado);?></td>
                                        <td><?php echo strtolower($listar->municipio);?></td>
                                        <td><?php echo strtolower($listar->parroquia);?></td>
                                        <td><?php echo strtolower($listar->nombre_localidad);?></td>
                                        <td><?php echo strtolower($listar->direccion_exacta);?></td>
                                        <td><?php echo strtolower($listar->e_social);?></td>
                                        <td><?php echo strtolower($listar->movimiento);?></td>
                                        <td><?php echo strtolower($listar->grado_instruccion);?></td>
                                        <td><?php echo strtolower($listar->profesion_oficio);?></td>
                                        <td><?php echo strtolower($listar->trabaja);?></td>
                                        <td><?php echo strtolower($listar->planes);?></td>
                                        <td> <button id="btnEditar<?php echo $listar->id_persona ?>" onclick="ireditar('<?php echo $listar->id_persona ?>')" data-editable="false" data-id="<?php echo $listar->id_persona ?>" class="btn-sm btn-primary btnEditar"> <i class="material-icons" id="icon<?php echo $listar->id_persona ?>">create</i></button> </td>
                                <?php
                                }
                                ?>
                                                
                                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>

    <script>
        var urlBase = '<?= base_url() ?>'
        var lista = '<?php echo json_encode($listado) ?>';


        var dataasesorate = '';
        //dataasesorate=JSON.parse(lista);

        $(document).ready(function() {


            var url = urlBase + "index.php/C_agroproductivo/agro";
            $.ajax({
                    method: "get",
                    url: url,

                })
                .done(function(resp) {

                    if (resp.length > 0)
                        resp.forEach(element => {

                            //  if(element.grado_instruccion.length != 0 || element.grado_instruccion.length != null)
                            if (document.getElementById('grado' + element.id_persona)) {



                                setValueSelect('grado' + element.id_persona, element.grado_instruccion.trim())
                            }

                            if (document.getElementById('sexo' + element.id_persona)) {
                                // $(`#sexo${element.id_persona} select`).val(element.sexo);

                                setValueSelect('sexo' + element.id_persona, element.sexo.trim())
                            }

                            if (document.getElementById('trabaja' + element.id_persona)) {
                                //$(`#profesion${element.id_persona} select`).val(element.trabaja);


                                setValueSelect('trabaja' + element.id_persona, element.trabaja.trim())
                            }

                        });

                }).fail(function(error) {

                    console.log(error)
                });






        });
    </script>