<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>
<br>

<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary"> Listado de Registados en las Jornadas de Formacion </h4></p>
    </div>
    </section>
    <hr style="   border-width: 3px; dorder:solid;" class="bg-danger">
<div class="container-fluid">
	<div class=" col-md-12">
			  <table id="tabla"  class=" table table-striped table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Telefonos</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Parroquia</th>
                        <th scope="col">Movimiento Social</th>
                        <th scope="col">Espacio a Utilizar</th>
                        <th scope="col">Servicio Electrico</th>
                        <th scope="col">Servicio de Agua</th>
                        <th scope="col">Internet</th>
                        <th scope="col">Email</th>        
                    </tr>
                </thead>
                <tbody>
        <?php
	 	foreach ($listar as $listar) {
	 ?>
	  <tr>
            <th scope="row"><?php echo $listar->cedula;?></th>
            <td><?php echo $listar->nombre;?></td>
            <td><?php echo $listar->apellido;?></td>
            <td><?php echo $listar->telefono;?></td>
            <td><?php echo $listar->estado;?></td>
            <td><?php echo $listar->municipio;?></td>
            <td><?php echo $listar->parroquia;?></td>
            <td><?php echo $listar->movimiento;?></td>
            <td><?php echo $listar->espacio;?></td>
            <td><?php echo $listar->luz;?></td>
            <td><?php echo $listar->agua;?></td>
            <td><?php echo $listar->internet;?></td>
            <td><?php echo $listar->email;?></td>   
    </tr>
	<?php
	}
	?>       
        </tbody>


</body>