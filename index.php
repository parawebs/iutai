<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content='registro parawebs' name='description'/>
	<meta content='Parawebs Registro' name='keywords'/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<title>Parawebs - Soluciones Informáticas</title>
</head>
<body id="inicio">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/registro.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
	<header>
		<div class="row">

			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a  class="volver" >
							<img class="navbar-brand" src="images/logo.png" width="235" height="50">
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="row fondoazul" >
		<div class="page">
			<div class="col-md-6">
				<div class="contenedor">
					<h2> MODELAMOS </h2>
					<div class="separador"></div>
					<h2> SUS IDEAS </h2><br/>
					<div class="separador"></div>
					<h2> EN EL MEJOR </h2><br/>
					<div class="separador"></div>
					<h2> SOFTWARE </h2>
					<div class="separador"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contenedor2" >
					<p>"Creemos que un software debe	<br/>
						construirse en base a las		<br/>
						necesidades de nuestros Clientes"<br/>
					</p>
					<br/>
					<br/>
					<h4> Queremos que sus procesos </h4>
					<div class="separador2"></div>
					<h4 class="segundo"> estén en las mejores condiciones</h4><br/>
				</div>
			</div>
		</div>

	</section>
	<section class="row registro" >
		<div class="page" id="registroweb">
			<h2> <span class="subrayado">Regístrese Aquí</span> </h2>
			<br>
			<br>

			<div class="col-md-7">
				<form id="registrar">
					<div class="form-group">
						<label class="control-label textred " for="nameuser">Nombre y Apellido</label>
						<input type="text" autocomplete="off" class="form-control input-lg" name="nameuser" maxlength="40" title="El campo es obligatorio"required>
					</div>
					<div class="form-group">
						<label class="control-label textred" for="movil">Teléfono Movil</label>
						<input name="movil" type="text" class="form-control input-lg" maxlength="11" id="movil" pattern="^(0416|0426|0414|0424|0412)\d{7}$" title="Formato de telefono inválido Ejm: 04165550044, 04145551144, 04125552244" placeholder="Ejm: 04140115533" autocomplete="off"  required>
					</div>

					<div class="form-group">
						<label class="control-label textred" for="correo">Correo Electrónico </label>
						<input type="text" placeholder="Ejm: hola@gmail.com" autocomplete="off" class="form-control input-lg" name="correo" id="correo" pattern="\S+@\S+\.\S+" title="Formato de correo inválido Ejm: hola@gmail.com" required>
					</div>
					<div class="form-group " style="float:right;">
						<br>
						<button type="submit" class="redweb" >
							Registrarse
						</button>
					</div>
					<br>
					<br>
					<br>
					<br>
					<div class="alert alert-success" id="respuesta" role="alert" style="display:none;">
					<div class="alert alert-danger" id="respuesta2" role="alert" style="display:none;">

					</div>

										<div class="alert alert-warning" role="alert">
						<p>Los campos de título precedido de asterisco (
							<span style="color:red;font-weight:bold;">*</span>
							) son obligatorios.
						</p>
					</div>

				</form>

			</div>
			<div class="col-md-5">

			</div>

		</div>
	</section>
	<footer class="last ">
		<div class="row calidad">
			<div class="page">
				<h2>Nuestro <span style="font-weight:bold">SOFTWARE</span> se basa <span class="subrayado">en la calidad</span> <span class="close"><a class="volver scroll-top" title="Subir"><i class="glyphicon glyphicon-chevron-up"></i></a></span></h2>

			</div>

		</div>
<!-- 		<ul class="nav pull-right scroll-top">
			<li><a class="volver" title="Subir"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
		</ul> -->
	</footer>

</body>
</html>