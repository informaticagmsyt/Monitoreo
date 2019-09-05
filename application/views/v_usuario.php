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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Listado de Usuarios del Sistema
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
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                   <thead>
                                        <tr>
                                            <th scope="col" style="font-family: 'Dancing Script', cursive;">#</th>
                                             <th scope="col" style="font-family: 'Dancing Script', cursive;">Nombre de Usuario</th>
                                              <th scope="col" style="font-family: 'Dancing Script', cursive;">Tipo de Usuario</th>
                                            <th scope="col" style="font-family: 'Dancing Script', cursive;">Perteneciente a:</th>
                                            <th scope="col" style="font-family: 'Dancing Script', cursive;">Estatus</th>
                                            <th scope="col" style="font-family: 'Dancing Script', cursive;">Editar</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                    <?php
                                        foreach ($listar as $listar) {
                                    ?>
                                  <tr>
                                        <th scope="row"><?php echo $listar->id_usuarios;?></th>
                                        <td><?php echo strtolower($listar->n_usuario);?></td>
                                        <td><?php echo strtolower($listar->tipo);?></td>
                                        <td><?php echo strtolower($listar->nombre); echo "  "; echo strtolower($listar->apellido);?></td>
                                        <td><?php echo strtolower($listar->estatus);?></td>
                                        <td align="center">
                                            <a href="<?php echo base_url('index.php/C_editar_usuario/edit_usuario/'.$listar->id_usuarios)?>"> 
                                                <i class="material-icons">create</i> 
                                            </a>
                                        </td>
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
