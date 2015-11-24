<?php

if($_POST){
  $email = $_POST['email'];
  $contrasena = $_POST['contrasena'];

  $conn = mysql_connect("localhost", "root", "");
  mysql_select_db("sistema", $conn);

  $consulta = mysql_query("SELECT * FROM usuarios where email ='$email'", $conn);
  if(($email=="")||($contrasena=="")){
  	echo htmlentities('Ingrese su Email y/o Contraseña');
}else
{
	 $filas_email = mysql_num_rows($consulta);
      if($filas_email!=0){
      	$usuario = mysql_fetch_assoc($consulta);
         $cont= md5($contrasena);
      if($cont==$usuario['contrasena'])
      {
      	 $_SESSION['email'] = $email;
         $_SESSION['contrasena'] = $contrasena;
      }
      else{
          echo htmlentities('La contraseña ingresada es incorrecta');
         }
         }

     else{
     echo htmlentities('Error de Email y/o Contraseña, Intente Nuevamente o Registrate');
   }
}
}

if(isset( $_SESSION['email'])&&isset( $_SESSION['contrasena'])) {
  http_redirect('inicio.php');
}