<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Registro de Usuarios
                               
                            </h2>
                        </div>     
                        <div class="body">
                            <form action="<?php echo  base_url();?>index.php/c_crear_usuario/registar" method="POST">
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <span> <b>Nombre</b></span>
                                            <div  class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <span> <b>Apellido </b></span>
                                            <div  class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span><b>Tipo de Usuario</b></span>
                                            <select name="tipo_usuario" class=" form-control ">
                                                <?php foreach ($listar as $listar)
                                                    {
                                                ?>
                                                <option value="<?php echo $listar->id_tipo_usuario;?>" ><?php echo $listar->tipo;?></option>
                                                <?php 
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                          <div class="col-md-6" >
                                            <span> <b>Nombre de Usuario </b></span>
                                            <div  class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="n_usuario" placeholder="Usuario" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                  
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <span> <b>Contraseña</b></span>
                                            <div  class="input-group">
                                                <div class="form-line">
                                                    <input type="password" id="serie" class="form-control" name="password" placeholder="******" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-xs-10 " >
                                         
                                        </div>
                                        <div class=".offset-md-10  col-xs-2">
                                            <button class="btn btn-block bg-pink waves-effect" type="submit">Registrar</button>
                                        </div>
                                    </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
