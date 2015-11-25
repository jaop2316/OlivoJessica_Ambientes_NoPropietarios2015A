
<?php


if($_POST){
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  
  $conn = mysql_connect("localhost", "root", "");
  mysql_select_db("examen", $conn);

$consulta= mysql_query("SELECT * from usuarios where email='$email'",$conn);
$filas=mysql_num_rows ($consulta); 

if(($email=="")||($contrasena==""))
{
	 echo htmlentities('Ingrese usuario y contraseña');
}

else
{

if($filas!=0)
{

	 $_SESSION['email'] = $email;
     $_SESSION['contrasena'] = $contrasena;
     http_redirect('inicio.php');
}

else
{
	echo htmlentities('Usuario y contraseña incorecto');
}

                       
}

}

?>


<html>
<head></head>
<body>

<form action="" method="POST">

<label for="email">Email:</label>
<input type ="text" name="email" >
<br>

<label for="contrasena">Contraseña</label>
<input type ="password" name="contrasena" >
<br>

<input type="submit" value="Iniciar Sesion" id="btnIngresar">

<a href="registro.php" id="enlance" >Registrarme</a>

</form>


</body>

</html>