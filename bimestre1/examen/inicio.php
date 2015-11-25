
<?php


if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $edad=$_POST['edad'];
  $peso=$_POST['peso'];
   $genero=$_POST['genero'];
   $estado=$_POST['estado'];
  

  $conn = mysql_connect("localhost", "root", "");
  mysql_select_db("examen", $conn);



if( ($nombre=="") || ($apellidos=="")|| ($edad=="")||($peso=="")||($genero=="")|| ($estado==""))
{
	 echo htmlentities('Ingrese los datos ');
}

else
{

$query = "INSERT INTO clientes 
                              (nombre, 
                                apellidos,
                                edad,
                                peso,
                                genero,
                                estado
                                
                               )
                            VALUES (
                              '$nombre',
                              '$apellidos'
                               $edad,
                               $peso,
                               $genero,
                               $estado
                             )
                              ";

                              $result = $conn ->query($query);
                               if ($result){
                                  echo htmlentities('Cliente Ingresado Correctamente');
                                  

                               }
                               else{
                                  die($conn ->error);
                               }
                          }
                
}



?>


<html>
<head></head>
<body>

<form action="" method="POST">

<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" value="">

<label for="apellidos">Apellidos:</label>
<input type="text" id="apellidos" name="apellidos" value="">

<label>Edad:</label>
<select class="edad" id="edad" name="edad">
<option selected hidden value="">Seleccione..</option>
<option value="1">Menos de 20 años</option>
<option value="2">Entre 20 y 39 años</option>
<option value="3">Entre 40 y 59 años</option>
<option value="4">Mas de 60 años</option>

</select>

<br>
<br>

<label for="peso">Peso:</label>
<input type="text" id="peso" name="peso" value=""><p> 


<label for="peso">Sexo</label>
<input type="radio" name="genero" value="1">Hombre
<input type="radio" name="genero" value="2">Mujer

<label for="peso">Estado Civil </label>
<input type="radio" name="estado" value="1">Soltero
<input type="radio" name="estado" value="2">Casado
<input type="radio" name="estado" value="3">Otro

<br>
<br>

<input type="submit" value="Registrar" id="btnRegistrar">


</form>




</body>

</html>