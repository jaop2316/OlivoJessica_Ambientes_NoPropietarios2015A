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
$contador=0;
$celdasUsu = "";
  foreach ($usuarios as $usuario) {
    $celdasUsu .= 

'<tr>
		  <td class="id" data-campo="id">'.$usuario["id"].'</td>
          <td id="nombre' . $contador . '" data-campo="nombre" class="editable" ><span>'.$usuario["nombre"].'</span></td>
          <td id="email' . $contador . '" data-campo="email" class="editable"><span>'.$usuario["email"].'</span></td>
          <td id="direccion' . $contador . '" data-campo="direccion" class="editable" ><span>'.$usuario["direccion"].'</span></td>
          <td id="telefono' . $contador . '" data-campo="telefono" class="editable"><span>'.$usuario["telefono"].'</span></td>
           <td id="usuario' . $contador . '" data-campo="usuario" class="editable"><span>'.$usuario["usuario"].'</span></td>
					
					
				</tr>
			 ';

$contador++;

  }

  echo ($celdasUsu);
