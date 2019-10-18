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
                                Nuevo
                            </h2>

                       
                       
                        </div>
                        <form id="nuevoRegistro">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i> Nombre
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nombre" placeholder="nombre" id="nombre"
                                            required autofocus value="">
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
                                            placeholder="apellido" required value="">
                                 </div>

                                 
                                    </div>
                                </div>

                                

                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Fecha Nacimiento
                                        </span>
                                        <div class="form-line">
                                            <input id="fecha_nac" class="form-control editable " value="" >
                                 </div>

                                 
                                    </div>
                                </div>

                                
                            </div>
                                <div class="row">
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Sexo
                                        </span>
                                        <div class="form-line">
                                            <select class="form-control  editable" id="sexo" >
                                                <option value=""> </option>

                                                <option value="M" > Masculino </option>
                                                <option value="F" > Femenino</option>
                                            </select>
                                 </div>

                                 
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Cedula
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="cedula"  id="cedula"
                                            placeholder="cedula" required value="">
                                 </div>

                                 
                                    </div>
                                </div>
                            </div>
                          

                            </div>

                            <div class="row">
                        

                         
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Telefono
                                        </span>
                                        <div class="form-line">
                                            <input id="telefono" class="form-control editable " value="" >
                                 </div>

                                 
                                    </div>
                                </div>

                                   
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Email
                                        </span>
                                        <div class="form-line">
                                            <input id="email" class="form-control editable " value="" >
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
                                            <input id="localidad" class="form-control editable " value="" >
                                 </div>

                                 
                                    </div>
                                </div>

                                
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Direccion
                                        </span>
                                        <div class="form-line">
                                            <input id="direccion" class="form-control editable" value="" >
                                 </div>

                                 
                                    </div>
                                </div>

                                   
                                <div class=" col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons"></i>Espacio Social
                                        </span>
                                        <div class="form-line">
                                            <input id="espacio" class="form-control editable" value="" >
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
                                            <input id="movimiento" class="form-control editable" value="" >
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
                                            <input id="oficio" class="form-control  " value="" >
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
                                            <i class="material-icons"></i>Pertenece
                                        </span>
                                        <div class="form-line">
                                            <input id="oficio" class="form-control  " value=" "  >
                                 </div>

                                 
                                    </div>
                                </div>

                                   

                            </div>
                            <div class="row">
                                    <div class="col-md-4"></div>
                                <div class="col-md-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Registrar</button>

                                </div>
                            </div>

                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
 
    <script>

    </script>