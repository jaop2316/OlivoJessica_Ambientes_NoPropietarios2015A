<?php
$result="";
$buscar=$_POST['consulta'];
$conn = new mysqli('localhost', 'root',"", "registro");
$sql ="SELECT * FROM usuario WHERE (nombre LIKE '%".$buscar."%') xor (email LIKE '%".$buscar."%') xor (direccion LIKE '%".$buscar."%') xor (usuario LIKE '%".$buscar."%') xor (telefono LIKE '%".$buscar."%')";
$res = $conn->query($sql);
$contar = $res->num_rows;

if(!$res){
      $result = 'Existi&oacute; un error al Consultar la bd.' . $conn->error;
    } else {
      $result = 'Consulta ejecutada con &eacute;xito.';
    }

$celdasBus = "";
if($contar == 0){
  $celdasBus.='<td> No se han encontrado resultados </td>';
   }
   else{
    
    for ($j = 0 ; $j < $contar ; ++$j){
  $res ->data_seek($j);
  $buscado[] = $res ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

$contador=0;
  foreach ($buscado as $valor) {
    
    $celdasBus .= 

'<tr>      
          <td class="id" data-campo="id">'.$valor["id"].'</td>
          <td id="nombre' . $contador . '" data-campo="nombre" class="editable" ><span>'.$valor["nombre"].'</span></td>
          <td id="email' . $contador . '" data-campo="email" class="editable"><span>'.$valor["email"].'</span></td>
          <td id="direccion' . $contador . '" data-campo="direccion" class="editable"><span>'.$valor["direccion"].'</span></td>
          <td id="telefono' . $contador . '" data-campo="telefono" class="editable" ><span>'.$valor["telefono"].'</span></td>
           <td id="usuario' . $contador . '" data-campo="usuario" class="editable"><span>'.$valor["usuario"].'</span></td>
          
          
        </tr>
       ';

   $contador++;



   }

}

     $salidaJSON=array("result" => $result,"celdasBus" => $celdasBus);

  echo json_encode( $salidaJSON);