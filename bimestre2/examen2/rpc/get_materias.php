<?php
$result="";
if($_POST){
$nivel=$_POST['nivel'];

$conn = new mysqli('localhost', 'root',"", "examen2");
$query = "SELECT * FROM materia where id_nivel='$nivel'";
$result = $conn ->query($query);
if (!$result) die($conn ->error);
$rows = $result ->num_rows;
$materias=array();

for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $materias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

$checkMaterias="";
foreach ($materias as $materia) {

	$checkMaterias.='<input type="checkbox" name="materias[]" value="'.$materia["id_materia"].'"> '.$materia["nombre"].'<br>';
}

echo  $checkMaterias;

}