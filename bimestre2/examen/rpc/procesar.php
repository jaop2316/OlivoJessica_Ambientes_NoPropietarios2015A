<?php
$result="";
	if($_POST){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$email=$_POST['email'];
		$contrasenia=md5($_POST['contrasenia']);

			$conn = new mysqli('localhost', 'root',"", "examen2");
  				if( $conn->connect_error ) 
    				$result = "No se puede establece la conexión con la BDD";
 			    else{
    				$q_insert = "INSERT INTO estudiante(nombres,apellidos,email,contrasena)
                  	VALUES ('$nombre','$apellido','$email','$contrasenia')";
					$res = $conn->query($q_insert);
					if(!$res){
     					 $result = 'Existi&oacute; un error al insertar.' . $conn->error;
 					 } 
   				    else {
     					 $result = 'Mensaje enviado con &eacute;xito.';
    					 }
  					}

echo $result;
}




