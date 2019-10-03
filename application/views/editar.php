<?php
defined('BASEPATH') or exit('No direct script access allowed');


$listar=$listado[0]; 
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
                                Editar
                            </h2>

                       
                       
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i> Nombre
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nombre" placeholder="nombre" id="nombre"
                                            required autofocus value="<?php echo strtolower($listar->nombre); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Apellido
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="apellido"  id="apellido"
                                            placeholder="apellido" required value="<?php echo $listar->apellido; ?>">
                                 </div>

                                 
                                    </div>
                                </div>

                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Sexo
                                        </span>
                                        <div class="form-line">
                                            <select class="form-control  editable<?php echo $listar->id_persona ?>" id="sexo" >
                                                <option value=""> </option>

                                                <option value="M" > Masculino </option>
                                                <option value="F" > Femenino</option>
                                            </select>
                                 </div>

                                 
                                    </div>
                                </div>

                          

                            </div>

                            <div class="row">
                        

                         

                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Fecha Nacimiento
                                        </span>
                                        <div class="form-line">
                                            <input id="fecha_nac" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->f_nacimiento); ?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                                
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Telefono
                                        </span>
                                        <div class="form-line">
                                            <input id="telefono" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->telefono); ?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                                   
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Email
                                        </span>
                                        <div class="form-line">
                                            <input id="email" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->email); ?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                            </div>

                            
                            <div class="row">
                        

                         

                                <div class=" col-md-4">

                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons"></i>Estado
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-control  " id="estadoe" >
                                                   
        
                                                    </select>
                                         </div>
        
                                         
                                            </div>
                            
                                </div>

                                
                                <div class=" col-md-4">


                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons"></i>Municipio
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-control  " id="municipio_id" >
                                                        <option value="">Selecione </option>
        
                                                    </select>
                                         </div>
        
                                         
                                            </div>
                            


                                
                                </div>

                                   
                                <div class=" col-md-4">

                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons"></i>Parroquia
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-control  " id="parroquia_id" >
                                                        <option value="">Selecione </option>
        
                                                    </select>
                                         </div>
        
                                         
                                            </div>
                            
                                </div>

                                   

                            </div>

                            <div class="row">
                        

                         

                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Localidad
                                        </span>
                                        <div class="form-line">
                                            <input id="localidad" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->nombre_localidad); ?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                                
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Direccion
                                        </span>
                                        <div class="form-line">
                                            <input id="direccion" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->direccion_exacta); ?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                                   
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Espacio Social
                                        </span>
                                        <div class="form-line">
                                            <input id="espacio" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->e_social); ?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                                   

                            </div>

                            <div class="row">
                        

                         

                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Movimiento
                                        </span>
                                        <div class="form-line">
                                            <input id="movimiento" class="form-control editable<?php echo $listar->id_persona ?> " value="<?php echo strtolower($listar->movimiento); ?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                                
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Grado de instrucción
                                        </span>
                                        <div class="form-line">
                                            <select class="form-control editable> " id="grado"  name="g_instruccion" required="">
                                                <option value="">Selecione</option>
                                                <option value="PRIMARIA">Primaria</option>
                                                <option value="BASICA">Basica</option>
                                                <option value="BACHILLER">Bachiller</option>
                                                <option value="TECNICA">Tecnica</option>
                                                <option value="UNIVERSITARIA">Universitaria</option>
                                            </select>
                                 </div>

                                 
                                    </div>
                                </div>

                                   
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Oficio
                                        </span>
                                        <div class="form-line">
                                            <input id="oficio" class="form-control  " value="<?php echo strtolower($listar->profesion_oficio);?>" >
                                 </div>

                                 
                                    </div>
                                </div>

                                   

                            </div>

                        
                            <div class="row">
                        

                         

                               
                                
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Trabaja
                                        </span>
                                        <div class="form-line">
                                            <select class="form-control editable> " id="trabaja"  name="trabaja" required="">
                                                <option value="">Selecione</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                              
                                            </select>
                                 </div>

                                 
                                    </div>
                                </div>

                                   
                                <div class=" col-md-4">

                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons"></i>Planes
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-control editable> " id="planes"  name="planes" required="">
                                                      
                                                    </select>
                                         </div>
        
                                         
                                            </div>

                               
                                </div>

                                   

                            </div>
                            <div class="row">
                                    <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button id="btnEditar<?php echo $listar->id_persona ?>" onclick="editar('<?php echo $listar->id_persona ?>')" data-editable="false" data-id="<?php echo $listar->id_persona ?>" class="btn-sm btn-primary btnEditar"> <i class="material-icons" id="icon<?php echo $listar->id_persona ?>">save</i></button>

                                </div>
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
var idplanes ="<?php echo $listar->id_planes;?>";

var estados ="<?php echo $listar->id_estado;?>";
var municipios ="<?php echo $listar->id_municipio;?>" ;
 var parroquias="<?php echo $listar->id_parroquia;?>"; 
 
        var lista = '<?php echo json_encode($listado) ?>';


        var dataasesorate = '';
        //dataasesorate=JSON.parse(lista);

        $(document).ready(function() {

            $('#editar').change(function() {
        if(this.checked) {
          
        }
             
    });
            var url = urlBase + "index.php/C_asesorate/asesorate";
            $.ajax({
                    method: "get",
                    url: url,

                })
                .done(function(resp) {

                    if (resp.length > 0)
                        resp.forEach(element => {

                            //  if(element.grado_instruccion.length != 0 || element.grado_instruccion.length != null)
                            if (document.getElementById('grado' )) {



                                setValueSelect('grado' , element.grado_instruccion.trim())
                            }

                            if (document.getElementById('sexo' )) {
                                // $(`#sexo${element.id_persona} select`).val(element.sexo);

                                setValueSelect('sexo' , element.sexo.trim())
                            }

                            if (document.getElementById('trabaja')) {
                                //$(`#profesion${element.id_persona} select`).val(element.trabaja);


                                setValueSelect('trabaja' , element.trabaja.trim())
                            }

                        });

                }).fail(function(error) {

                    console.log(error)
                });






        });
    </script>