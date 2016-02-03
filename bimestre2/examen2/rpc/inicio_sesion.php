<?php 
if($_POST){
   
	$email=$_POST['email'];
	$contrasenia=md5($_POST['contrasenia']);
    $nombre=$_POST['nombre'];
    $conn = new mysqli('localhost', 'root',"", "examen2");
    session_start();
    $q_select= "SELECT * from estudiante where email='$email' AND contrasena='$contrasenia'";
    $res = $conn->query($q_select);
    $registros = array();
     $rows = $res ->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j){
    $res ->data_seek($j);
    $registros[] = $res ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
    }
    if($rows>0)
    {
        $_SESSION['email'] = $email;
         $_SESSION['contrasenia'] = $contrasenia;
         foreach($registros as $registro){
         $_SESSION['nombre']=$registro['nombres'];
         $_SESSION['id']=$registro['id_estudiante'];
        }
         echo "true";

    }
    else{

        echo "false";
        header('Location: /examen2/index.php');
       
    }
}
if(isset( $_SESSION['email'])&&isset( $_SESSION['contrasenia'])) {
header('Location: /examen2/matriculacion.php');
}
?>