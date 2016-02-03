<?php
if($_POST)
{
	$email=$_POST['email'];
	$conn = new mysqli('localhost', 'root',"", "examen2");
    $q_select= "SELECT * from estudiante where email='$email'";
    $res = $conn->query($q_select);
    $rows = $res ->num_rows;

    if($rows>0)
    {
       echo "false";
    }
    else{

      	echo "true";
    }
}

else {

	echo "no se han recibido datos";
}

?>