<?php
$conn = new mysqli('localhost' , 'root' , '', 'examen2');
if ($conn->connect_error) die($conn ->connect_error);
//Inicio de Sesion
session_start();
//iniciar sesion 
//print_r($_SESSION);
if(!$_SESSION){

	header("Location:index.php");
}

$query = "SELECT * FROM nivel";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$niveles = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $niveles[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Matriculacion</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>

<div class="container">
	<div class="row" id="saludo">
		<div class="col-md-12">
			<h2>Bienvenido <?php echo $_SESSION['nombre'];?> &nbsp;en esta pantalla te puedes matricular </h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="row" id="divNivel">
				<div class="col-md-6">
					<label for="nivel">Seleccione el nivel</label>
				</div>
				<div class="col-md-6">
					<select id="nivel" name="nivel">
						<option>Seleccione</option>
						<?php
						 foreach($niveles as $nivel){
    						echo '<option value="' . $nivel['id_nivel'] . '">' . $nivel['nombre'] . '</option>';
  						}
						?>
					</select>
				</div>
				</div>
				</div>
				<div class="col-md-6">
				    <div class="row" id="titMaterias">
				    	<div class="col-md-12"> 
							<label for="materias">Lista de Materias Disponibles</label>
						</div>
					</div>
					<div class="row" id="lstMaterias">
						<div class="col-md-12">
						
                         
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="divBoton">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<button id="btnRegistrarMaterias" class="form-control">Registrar Materias</button>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row" id="regMaterias">
		<div class="col-md-4">
		<div class="row" id="mensaje">
        
		</div>
		</div>
		<div class="col-md-4">
			<table id="materias_registradas" class="table table-bordered">
				<thead>
					<td>Materia</td>
					<td>Nivel</td>
					<td>Profesor</td>
				</thead>
				<tbody>
					
				</tbody>
				
			</table>
		</div>
		<div class="col-md-4">
		<a href="./rpc/cerrar_sesion.php">cerrar sesión</a>
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