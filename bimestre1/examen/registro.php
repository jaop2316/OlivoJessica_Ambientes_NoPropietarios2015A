<?php


if($_POST){
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  $contrasena2 = md5($_POST['contrasena2']);


if(($email=="")||($contrasena=="")||($contrasena2==""))
{
	 echo htmlentities('Ingrese sus datos');
}

else
{

$conn = new mysqli('localhost' , 'root' , '', 'examen');
      if ($conn->connect_error) die($conn ->connect_error);


$query = "INSERT INTO usuarios 
                              (email, 
                                contrasena1
                                
                               )
                            VALUES (
                              '$email',
                              '$contrasena'
                             )
                              ";

                              $result = $conn ->query($query);
                               if ($result){
                                  echo htmlentities('Usuario Ingresado Correctamente');
                                  http_redirect('inicio.php');

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

<label for="email">Email:</label>
<input type ="text" name="email" >
<br>

<label for="contrasena">Contraseña</label>
<input type ="password" name="contrasena" >
<br>

<label for="verificar">Verificar Contraseña</label>
<input type ="password" name="contrasena2" >
<br>

<input type="submit" value="Registrarme" id="btnRegistrarme">


</form>

</body>

</html>







  
