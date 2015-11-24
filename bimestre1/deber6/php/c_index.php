<?php

if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $email2 = $_POST['email2'];
  $contrasena = md5($_POST['contrasena']);
  $contrasena2 = md5($_POST['contrasena2']);
  $sexo = $_POST['sexo'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];

  
  

  if($contrasena !== $contrasena2){
    echo htmlentities('Las contraseñas no coinciden');
  }
else{
@$conn = new mysqli('localhost' , 'root' , '', 'sistema');
  if ($conn->connect_error) die($conn ->connect_error);
  
   
   $consulta= "SELECT * from 'usuarios' where email='$email'" ;
   $query2=mysqli_query($conn,$consulta) ;
   $fila=mysqli_num_rows ($query2)or die(mysql_error());

  if ($fila){
  	
  	echo htmlentities('Ya existe el email en la base de datos, pruebe otro');
  }
  else{
$query = "INSERT INTO usuarios
                  (Nombre, 
                    Apellidos, 
                    email, 
                    email2, 
                    contrasena, 
                    contrasena2,
                    sexo, 
                    dia, 
                    mes, 
                    anio)
                VALUES (
                  '$nombre',
                  '$apellidos',
                  '$email',
                  '$email2',
                  '$contrasena',
                  '$contrasena2',
                  '$sexo',
                  $dia,
                  $mes,
                  $anio
                  )
  ";
  $result = $conn ->query($query);
  if (!$result) die($conn ->error);
}

	


}
}



?>
