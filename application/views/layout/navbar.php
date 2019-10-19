<?defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar #03A9F4
bg-light-blue" >
        <div class="container-fluid">
            <div class="navbar-header  blue darken-1">
                <a href="javascript:void(0);" class="navbar-toggle collapsed blue darken-1" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?= base_url('index.php/c_principal');?>">Gran Mision Saber y Trabajo</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right blue darken-1">
                    <li class="pull-right"><a href="<?php echo base_url('index.php/C_login/salir');?>" >
                       <b>Salir</b></a></li>
                </ul>
            </div>
        </div>
    </nav>
