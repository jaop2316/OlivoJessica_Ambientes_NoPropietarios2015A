<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Registro de Estudiantes</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<h4> Registrate para poder matricularte</h4>
	</div>
</div>
<form action="" method='POST' id="estudiante" novalidate="novalidate">
<div class="row">
	<div class="col-md-6">
		<label for="nombre"> Nombre </label>
	</div>
	<div class="col-md-6">
		<input type="text" id="nombre" name="nombre" placeholder="Nombre" value="">
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<label for="apellido"> Apellido </label>
	</div>
	<div class="col-md-6">
		<input type="text" id="apellido" name="apellido"placeholder="Apellido" value="">
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<label for="email"> Email </label>
	</div>
	<div class="col-md-6">
		<input type="text" id="email" name="email"placeholder="Email" value="">
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<label for="contrasenia">Contraseña </label>
	</div>
	<div class="col-md-6">
		<input type="password" id="contrasenia" name="contrasenia"placeholder="Contraseña" value="">
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<label for="contrasenia2">Verificar Contraseña </label>
	</div>
	<div class="col-md-6">
		<input type="password" id="contrasenia2" name="contrasenia2"placeholder="Verificar Contraseña" value="">
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<button class="form-control" id="btnRegistrate"> Registrate</button>
	</div>
    <div class="col-md-6">
    	<button class="form-control" id="btnCancelar">Cancelar</button>
    </div>

</div>
</form>


</div>







<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>