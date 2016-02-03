<?php 
if($_POST){

	$email=$_POST['email'];
	$contrasenia=md5($_POST['contrasenia']);
	$conn = new mysqli('localhost', 'root',"", "examen2");
    $q_select= "SELECT * from estudiante where email='$email' AND contrasena='$contrasenia'";
    $res = $conn->query($q_select);
    $rows = $res ->num_rows;
    if($rows>0)
    {
       echo "true";
    }
    else{

      	echo "false";
    }

}

else{

	echo "no se han recibido datos";
}
?>