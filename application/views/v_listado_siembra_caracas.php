<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>
<br>

<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary"> Listado de personas Registadas en el Plan  Siembra Caracas </h4></p>
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
                        <th scope="col">Parroquia</th>
                        <th scope="col">Eje</th>
                        <th scope="col">Sector</th>
                        <th scope="col">Movimiento</th>
                        <th scope="col">Espacio</th>
                        <th scope="col">Posee Luz</th>
                        <th scope="col">Posee Agua</th>
                        <th scope="col">Posee Internet</th>
                        <th scope="col">Tipo de Proyecto</th>
                        <th scope="col">Email</th>        
                    </tr>
                </thead>
                <tbody>
	  <tr>
            <th scope="row"><?php echo $listar->cedula;?></th>
            <td><?php echo $listar->nombre;?></td>
            <td><?php echo $listar->apellido;?></td>
            <td><?php echo $listar->telefono;echo "-";echo $listar->celular;?></td>
            <td><?php echo $listar->parroquia;?></td>
            <td><?php echo $listar->eje;?></td>
            <td><?php echo $listar->sector;?></td>
            <td><?php echo $listar->movimiento;?></td>
            <td><?php echo $listar->espacio;?></td>
            <td><?php echo $listar->electricidad;?></td>
            <td><?php echo $listar->agua;?></td>
            <td><?php echo $listar->internet;?></td>
            <td><?php echo $listar->tipo_proyecto;?></td>
            <td><?php echo $listar->email;?></td>   
    </tr>
    
        </tbody>


</body>