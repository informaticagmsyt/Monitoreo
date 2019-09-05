<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>
<br>

<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary"> Listado de Registro para Captacion de Talento Humano</h4></p>
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
                        <th scope="col">Sexo</th>
                        <th scope="col">Telefonos</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Parroquia</th>
                        <th scope="col">Profesion</th>
                        <th scope="col">Oficio</th>
                        <th scope="col">Email</th>        
                    </tr>
                </thead>
                <tbody>
        <?php
	 	foreach ($listar as $listar) {
	 ?>
	  <tr>
            <th scope="row"><?php echo $listar->cedula;?></th>
            <td><?php echo strtolower ($listar->nombre);?></td>
            <td><?php echo strtolower ($listar->apellido);?></td>
            <td><?php echo strtolower ($listar->sexo);?></td>
            <td><?php echo strtolower ($listar->telefono);?></td>
            <td><?php echo strtolower ($listar->estado);?></td>
            <td><?php echo strtolower ($listar->municipio);?></td>
            <td><?php echo strtolower ($listar->parroquia);?></td>
            <td><?php echo strtolower ($listar->profesion);?></td>
            <td><?php echo strtolower ($listar->oficio);?></td>
            <td><?php echo strtolower ($listar->email);?></td>   
    </tr>
	<?php
	}
	?>       
        </tbody>


</body>