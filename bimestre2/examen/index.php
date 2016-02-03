<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Inicio de Sesion</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
	<div clss="row">
		<div class="col-md-12">
			<h5> Inicia la sesion para matricularte </h5>
		</div>
	</div>
   <form action="" method='POST' id="inicio">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<label for="Email">Email</label>
				</div>
				<div class="col-md-6">
					<input type="text" id="email" name="email"placeholder="Email" value="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="contrasenia">Contrasenia</label>
				</div>
				<div class="col-md-6">
					<input type="password" id="contrasenia" name="contrasenia"placeholder="Contraseña" value="">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<button class="form-control" id="btnIniciar">Inicia Sesion</button>
				</div>
				<div class="col-md-6">
					<a href="registro.php">Registrarme</a>
				</div>
			</div>       
    </form>
     		<div class="row" id="mensaje">
     			<div class="col-md-12"></div>
     		</div>
		</div>
	</div>



</div>






	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/additional-methods.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>