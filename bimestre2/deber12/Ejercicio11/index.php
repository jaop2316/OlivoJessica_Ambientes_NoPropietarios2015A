<!doctype html>
<html>
<head>
<title>Ejercicio 11</title>
</head>

<body>

<form action="p_index.php" method="post">
	<?php
 $conexion= mysql_connect("localhost","root","");
  mysql_select_db("intereses",$conexion) or die("No se puede conectar");
  $query2="SELECT Id_Interes, interes FROM datosInt; ";
  $resultado=mysql_query($query2,$conexion);


   while ($fila=mysql_fetch_row($resultado)){
   
    echo "<div id='contenedor_$fila[0]' class='contenedor'>";
    echo "<label for='intereses'> Interes $fila[0] </label>";
   	echo "<input type='text' id='interes$fila[0]' name='interes$fila[0]' value='$fila[1]'> ";
    echo "<br>";
    echo "</div>";
   }
   ?>
 
<button id="btnAgregar">Agregar</button>
<button id="btnEliminar">Eliminar</button>
<input type="submit" value="Modificar Intereses" />
</form>


<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>