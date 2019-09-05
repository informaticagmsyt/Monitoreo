<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
                                Registro Acompañamiento a la Gestion Productiva
                            </h2>
                        </div>     
                        <div class="body">
                            <form action="<?php echo  base_url();?>index.php/c_registro_agro/registar" method="POST">
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <span> <b>Cedula</b></span>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="cedula" placeholder="1000000" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <span><b>Nombres</b></span>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="nombre" placeholder="Nombres" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col-md-6" >
                                            <span> <b>Apellidos</b></span>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="apellido" placeholder="apellido" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <span><b>Sexo</b></span>
                                            <select name="sexo" class=" form-control ">
                                                 <option value="M" >Masculino</option>
                                                 <option value="F" >Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col-md-6" >
                                            <span> <b>Fecha de Nacimiento</b></span>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="date" class="form-control" name="f_nacimiento" placeholder="apellido" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">
                                        <div class="col-md-6" >
                                            <span> <b>Telefono</b></span>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="number" class="form-control" name="tlf" placeholder="04160000000" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <span><b>Email</b></span>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="email" placeholder="email@email.com" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <span><b>estado</b></span>
                                            <select name="estado" id="cbx_estado" class=" form-control ">
                                                <?php foreach ($stado as $stado)
                                                    {
                                                ?>
                                                <option value="<?php echo $stado->id_estado;?>" ><?php echo $stado->estado;?></option>
                                                <?php 
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                     <div class="col-md-4">
                                            <span><b>Municipio</b></span>
                                            <select name="municipio" id="cbx_municipio" class=" form-control ">
                                                    <option value="J">Seleccione</option>
                                            </select>
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

 <script language="javascript">
            $(document).ready(function(){
                $("#cbx_estado").change(function () {

                    $('#cbx_municipio').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
                    
                    $("#cbx_estado option:selected").each(function () {
                        id_estado = $(this).val();
                        $.post("<?php echo base_url()?>index.php/C_select/get_municipio?>", { id_estado: id_estado }, function(data){
                            $("#cbx_municipio").html(data);
                        });            
                    });
                })
            });
            /*
            $(document).ready(function(){
                $("#cbx_municipio").change(function () {
                    $("#cbx_municipio option:selected").each(function () {
                        id_municipio = $(this).val();
                        $.post(" includes/getLocalidad.php", { id_municipio: id_municipio }, function(data){
                            $("#cbx_localidad").html(data);
                        });            
                    });
                })
            });*/
        </script>

</script>