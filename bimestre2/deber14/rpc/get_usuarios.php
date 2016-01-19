<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query2 = "SELECT * FROM usuario";
$result2 = $conn ->query($query2);
if (!$result2) die($conn ->error);
$rows2 = $result2 ->num_rows;
$usuarios=array();

for ($j = 0 ; $j < $rows2 ; ++$j){
  $result2 ->data_seek($j);
  $usuarios[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

$celdasUsu = "";
  foreach ($usuarios as $usuario) {
    $celdasUsu .= 

'<tr>
					<td>'.$usuario["nombre"].'</td>
					<td>'.$usuario["email"].'</td>
					<td>'.$usuario["direccion"].'</td>
					<td>'.$usuario["usuario"].'</td>
					
					
				</tr>
			 ';



  }

  echo $celdasUsu;
