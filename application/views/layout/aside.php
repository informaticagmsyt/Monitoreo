<?defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACION</li>
                     <li>
                        <a>   
                            <span style="color: navy;">Bienvenido -> <?php echo  $this->session->userdata('n_usuario');?></span>
                        </a>
                    </li>
                    <li  class="active" >
                        <a href="<?= base_url('index.php/c_principal');?>">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4'): ?>
                             <li >
                                <a href="<?= base_url('index.php/c_jornadas');?>">
                                    <i class="material-icons">timeline</i>
                                    <span>Graficas</span>
                                </a>
                            </li>
                            <li >
                                <a href="<?= base_url('index.php/c_principal');?>">
                                    <i class="material-icons">perm_device_information</i>
                                    <span>Tablero</span>
                                </a>
                            </li>
                    <?php endif ?>
                    <?php if ($this->session->userdata('nivel_usuario')=='1'): ?>
                         <li >
                                <a href="<?= base_url('index.php/c_jornadas');?>">
                                    <i class="material-icons">timeline</i>
                                    <span>Graficas</span>
                                </a>
                            </li>
                        <li >
                                <a href="<?= base_url('index.php/c_principal');?>">
                                    <i class="material-icons">perm_device_information</i>
                                    <span>Tablero</span>
                                </a>
                            </li>
                    <?php endif ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Gestion Productiva</span>
                        </a>

                        <ul class="ml-menu">
                             <?php if ($this->session->userdata('nivel_usuario')=='1'): ?>
                                    <li>
                                        <a href="<?= base_url('index.php/c_agroproductivo');?>">Listado General de Registros</a>
                                    </li>

                                    
                            <?php endif ?>

                            <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4' ) : ?>
                                   <li>
                                <a href="<?= base_url('index.php/c_graficas_agro');?>">Estaditicas</a>
                            </li>
                           <!-- <li>
                                <a href="<?= base_url('index.php/C_registro_agro');?>">Registros Agro Productivo</a>
                            </li>-->
                            <li>
                                <a href="<?= base_url('index.php/c_agroproductivo');?>">Listado General de Registros</a>
                            </li>
                            <?php endif ?>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Programa Asesorate</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4'): ?>
                                        <li>
                                            <a href="<?= base_url('index.php/c_graficas_asesorate');?>">Estaditicas</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('index.php/c_asesorate');?>">Listado General de Registros</a>
                                        </li>
                            <?php endif ?>
                             <?php if ($this->session->userdata('nivel_usuario') =='1'): ?>
                                        <li>
                                            <a href="<?= base_url('index.php/c_asesorate');?>">Listado General de Registros</a>
                                        </li>
                             <?php endif ?>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Brigadas Tecnicas</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4'): ?>
                                 <li>
                                    <a href="<?= base_url('index.php/c_graficas_brigadas');?>">Estaditicas</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('index.php/c_brigadas');?>">Listado  General de Registros</a>
                                </li>
                            <?php endif ?>
                            <?php if ($this->session->userdata('nivel_usuario') =='1'): ?>
                                    <li>
                                        <a href="<?= base_url('index.php/c_brigadas');?>">Listado  General de Registros</a>
                                    </li>
                            <?php endif ?>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Joven Emprendedor</span>
                        </a>

                       
                        <ul class="ml-menu">
                            <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4'): ?>
                                 <li>
                                    <a href="<?= base_url('index.php/c_graficas_emprende');?>">Estaditicas</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('index.php/c_emprende');?>">Listado General de Registros</a>
                                </li>
                            <?php endif ?>
                           <?php if ($this->session->userdata('nivel_usuario') =='1'): ?>
                                <li>
                                    <a href="<?= base_url('index.php/c_emprende');?>">Listado General de Registros</a>
                                </li>
                           <?php endif ?>
                        </ul>
                    </li>
                    
                    
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Proyecto Ingenio</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4' ): ?>
                                <li>
                                <a href="<?= base_url('index.php/c_graficas_ingenio');?>">Estaditicas</a>
                            </li>
                            <li>
                                <a href="<?= base_url('index.php/c_ingenio');?>">Listado General de Registros</a>
                            </li>
                        <?php endif ?>
                            <?php if ($this->session->userdata('nivel_usuario') =='1'): ?>
                                   <li>
                                <a href="<?= base_url('index.php/c_ingenio');?>">Listado General de Registros</a>
                            </li> 
                            <?php endif ?>    


                        </ul>
                    </li>
                    <!--li>
                    <a href="<?= base_url('index.php/NuevoRegistro');?>" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Nuevo Registro</span>
                        </a>
                        </li-->
                    <?php if ($this->session->userdata('nivel_usuario') =='2' || $this->session->userdata('nivel_usuario')=='3' || $this->session->userdata('nivel_usuario')=='4' ) : ?>
                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Configuracion</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Usuarios</span>
                                </a>
                                <ul class="ml-menu">
                                    
                                                <li>
                                                    <a href="<?= base_url('index.php/c_crear_usuario');?>">Registrar Usuarios</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('index.php/c_usuario');?>">Listado de  Usuarios</a>
                                                </li>
                                    <?php endif ?>
                                 
                                </ul>
                            </li>
                           <!-- <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <div class="legal">
                <div class="copyright">
                    <span class="copy-left">&copy;</span> 2019 <a href="#">Gran Mision Saber y Trabajo</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
        </aside>
    </section>
