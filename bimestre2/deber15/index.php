<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// 

$query2 = "SELECT * FROM usuario";
$result2 = $conn ->query($query2);
if (!$result2) die($conn ->error);
$rows2 = $result2 ->num_rows;
$usuarios=array();

for ($j = 0 ; $j < $rows2 ; ++$j){
  $result2 ->data_seek($j);
  $usuarios[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
//print_r($usuarios);


$result ->close();
$conn ->close();
?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8"> 
<title> Deber 15</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/styles.css">
 <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">

 
</head>
<body>

<div class="container">

<div class="row" id="encabezado">
<div class="col-md-12">
<p id ='titulo1'><b>Registrate</b></p>
</div>
<div class="col-md-12">
<p id = 'titulo1'> Es gratis(y lo seguira siendo).</p>
</div>
</div>

<form action="" method='POST' id="usuario" novalidate="novalidate">


<div class="row" id="fila1">

<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="Nombre">Nombre</label>
</div>

<div class="col-md-3">
<input type="text" id="txtnombre" value="" name="nombre">
</div>
</div>


<div class="row "id="fila2">

<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="Email">Email</label>
</div>

<div class="col-md-3">
<input type="text" id="txtemail" value="" name="email">
</div>
</div>


<div class="row" id="fila3">
<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="telefono">Telefono</label>
</div>

<div class="col-md-3">
<input type="text" id="txtfono" value="" name="telefono">
</div>
</div>

<div class="row" id="fila4">
<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="direccion">Dirección</label>
</div>

<div class="col-md-3">
<input type="text" id="txtdir" value="" name="direccion">
</div>

</div>

<div class="row" id="fila5">

<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="provincia">Provincia</label>
</div>
<div class="col-md-3">
<select id="txtprovincia" name="provincia">
  <option value="">Seleccione...</option>
<?php
  foreach($provincias as $pr){
    echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
  }

?>
</select>
</div>
</div>

<div class="row" id="fila5C">
<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="canton">Cantón</label>
</div>

<div class="col-md-3">
<select id="txtcanton" name="canton">
  <option value="">Seleccione...</option>
</select>
</div>
</div>

<div class="row" id="fila5P">
  <div class="col-md-3">
</div>
 <div class="col-md-2">
<label for="parroquia">Parroquia</label>
</div>
 <div class="col-md-3">
<select id="txtparroquia" name="parroquia">
  <option value="">Seleccione...</option>
</select>
</div>
</div>

<div class="row" id="fila6">
<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="usuario">Usuario</label>
</div>
<div class="col-md-3">
<input type="text" id="txtusuario" value="" name="usuario">
</div>
</div>

<div class="row" id="fila7">
<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="contrasenia">Contraseña</label>
</div>
<div class="col-md-3">
<input type="password" id="contrasenia" value="" name="contrasenia">
</div>
</div>

<div class="row" id="fila8">

<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="contrasenia">Verificar Contraseña</label>
</div>
<div class="col-md-3">
<input type="password" id="contrasenia2" value="" name="contrasenia2">
</div>
</div>



<div class="row" id="fila9">

<div class="col-md-3">
</div>
<div class="col-md-3">
</div>
<div class="col-md-3">
<button  id="btnRegistrar" name="registrar"> Registrate</button>
</div>
</div>

</form>

<div class="row" id="mensaje">
<div class="col-md-12">
<div id="mensaje" class="alert"></div>
</div>
</div>

<div class="row" id="buscar">
 <div class="col-md-2">
 <label for="busqueda">Buscar</label>
</div>
<div class="col-md-2">
 <input type="text" id="busqueda" />
 </div> 

</div>

<div class="row" id="tablaRegistro">

<div class="col-md-12">

<table id="tabla_usuarios" class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Usuario</th>
  </tr>
</thead>
<tbody>
  <?php
  $contador = 0;
  foreach ($usuarios as $usuario) {

    echo '<tr>';
     echo '<td class="id" data-campo="id"><span>'. $usuario['id'] .'</span></td>';
    echo '<td id="nombre' . $contador . '" data-campo="nombre" class="editable"><span>'. $usuario['nombre'] .'</span></td>';
    echo '<td id="email' . $contador . '" data-campo="email" class="editable"><span>'. $usuario['email'] .'</span></td>';
    echo '<td id="direccion' . $contador . '" data-campo="direccion" class="editable"><span> '. $usuario['direccion'] .'</span> </td>';
     echo '<td id="telefono' . $contador . '" data-campo="telefono" class="editable"> <span>'. $usuario['telefono'] .'</span> </td>';
    echo '<td id="usuario' . $contador . '" data-campo="usuario" class="editable"> <span>'. $usuario['usuario'] .'</span> </td>';
     
    echo '</tr>';

  $contador++;
  }
  ?>
  
  </tbody>
</table>



</div>

<div class="row" id="mensaje2">
<div class="col-md-12">
<div id="mensaje2" class="success"></div>
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