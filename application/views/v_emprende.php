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
                                Listado de Peronas Registradas en el Programa Joven Emprendedor
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

                                    <tbody>
                                        <?php

                                        foreach ($listado as $listar) {
                                        
                                           
                                           ?>

                                            <tr>
                                                <th scope="row"><?php echo $listar->cedula; ?></th>
                                                <td> <input name="nombre" id="nombre<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?>" value=" <?php echo strtolower($listar->nombre); ?>" disabled></td>
                                                <td> <input name="apellido" id="apellido<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->apellido); ?> " disabled></td>
                                                <td>

                                                    <select class="form-control  editable<?php echo $listar->id_persona ?>" id="sexo<?php echo $listar->id_persona ?>" disabled>
                                                        <option value=""> </option>

                                                        <option value="M" > Masculino </option>
                                                        <option value="F" > Femenino</option>
                                                    </select>

                                                <td> <input id="fecha_nac<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->f_nacimiento); ?>" disabled></td>
                                                <td> <input id="telefono<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->telefono); ?>" disabled></td>
                                                <td> <input id="email<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->email); ?>" disabled></td>
                                                <td> <?php echo strtolower($listar->estado); ?></td>
                                                <td> <?php echo strtolower($listar->municipio); ?></td>
                                                <td><?php echo strtolower($listar->parroquia); ?></td>
                                                <td> <input id="localidad<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->nombre_localidad); ?>" disabled></td>
                                                <td> <input id="direccion<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->direccion_exacta); ?>" disabled></td>
                                                <td> <input id="espacio<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->e_social); ?>" disabled></td>
                                                <td> <input id="movimiento<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->movimiento); ?>" disabled></td>
                                                <td>


                                                    <select class="form-control editable<?php echo $listar->id_persona ?> " id="grado<?php echo $listar->id_persona ?>" disabled name="g_instruccion<?php echo $listar->id_persona ?>" required="">
                                                        <option value="">Selecione</option>
                                                        <option value="PRIMARIA">Primaria</option>
                                                        <option value="BASICA">Basica</option>
                                                        <option value="BACHILLER">Bachiller</option>
                                                        <option value="TECNICA">Tecnica</option>
                                                        <option value="UNIVERSITARIA">Universitaria</option>
                                                    </select>


                                                </td>
                                                <td> <input id="profesion<?php echo $listar->id_persona ?>" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->profesion_oficio); ?>" disabled></td>
                                                <td>
                                                    <select class="form-control  editable<?php echo $listar->id_persona ?>" id="trabaja<?php echo $listar->id_persona ?>" disabled>
                                                        <option value="">Seleccione</option>
                                                        <option value="No">No</option>
                                                        <option value="Si">Si</option>
                                                    </select>


                                                </td>
                                                <td> <?php echo strtolower($listar->planes); ?> </td>
                                                <td> <button id="btnEditar<?php echo $listar->id_persona ?>" onclick="editar('<?php echo $listar->id_persona ?>')" data-editable="false" data-id="<?php echo $listar->id_persona ?>" class="btn-sm btn-primary btnEditar"> <i class="material-icons" id="icon<?php echo $listar->id_persona ?>">create</i></button> </td>

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


            var url = urlBase + "index.php/C_emprende/emprende";
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