<?php
session_start();
$result="";
$id=$_SESSION['id'];
if($_POST){

$materias=$_POST['materias'];
$conn = new mysqli('localhost', 'root',"", "examen2");
  				if( $conn->connect_error ) 
    				$result = "No se puede establece la conexión con la BDD";
 			    else{
 			    	$contador=0;
 			    	foreach ($materias as $materia=> $value) {
 			    	$q_insert = "INSERT INTO estudiante_x_materia(id_estudiante,id_materia)
                  	VALUES ( $id,$value)";
					$res = $conn->query($q_insert);
					$contador++;
					}

					if(!$res){
     					 $result = 'Existi&oacute; un error al insertar.' . $conn->error;
               
 					 } 
   				    else {
     					 $result = 'Mensaje enviado con &eacute;xito.';
    					 }
}


foreach ($materias as $materia=> $value) {
$q_select= "SELECT nombre,id_nivel,profesor from materia where id_materia='$value'";
    $res2 = $conn->query($q_select);
    $materias = array();
     $rows = $res2 ->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j){
    $res2 ->data_seek($j);
    $materias[] = $res2 ->fetch_array(MYSQLI_ASSOC);
}
}

$regisMaterias="";

foreach ($materias as $materia) {

	$regisMaterias.='
     <tr>      
          <td >'.$materia["nombre"].'</td>
          <td >'.$materia["id_nivel"].'</td>
          <td >'.$materia["profesor"].'</td>
          
          
          
        </tr>

        ';
}


$salidaJSON=array("result" => $result,"regisMaterias" => $regisMaterias);

echo json_encode( $salidaJSON );






}

