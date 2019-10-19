<body class="#03A9F4
bg-light-blue">
	
<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
						<br><br><br>
						<body >
						    <div class="login-box">
						        <div class="logo">
						            <h1  class="text-center " style="font-family: 'Satisfy', cursive;">  Bienvenidos al Sistema de Monitoreo de Registrados en los Planes Socio-Productivos de la Gran Mision Saber y Trabajo. </h1>
						        </div>
						        <br><br><br>
						        <div class="card">
						            <div class="body">
						                <form id="sign_in" method="POST" action="<?php echo base_url();?>index.php/c_login/ingresar">
						                    <div class="msg" style="font-family: 'Leckerli One', cursive;"> <h3 class="text-center">Inicie sesion en el sistema </h3></div>
						                    <br>
						                    <hr>
						                    <div class="input-group">
						                        <span class="input-group-addon">
						                            <i class="material-icons">person</i>
						                        </span>
						                        <div class="form-line">
						                            <input type="text" class="form-control" name="login" placeholder="Usuario" required autofocus>
						                        </div>
						                    </div>
						                    <div class="input-group">
						                        <span class="input-group-addon">
						                            <i class="material-icons">lock</i>
						                        </span>
						                        <div class="form-line">
						                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
						                        </div>
						                    </div>
						                    <div class="row">
						                        <div class="col-xs-8 p-t-5">
						                            
						                        </div>
						                        <div class="col-xs-4">
						                            <button class="btn btn-block bg-pink waves-effect" type="submit">ENTRAR</button>
						                        </div>
						                    </div>

						                </form>
						            </div>
						        </div>
						    </div>
						</body>    
				</div>
			</div>
		</div>

	</section>

</body>