<?php
$result="";
if($_POST){
$valor=$_POST['valorM'];
$campo=$_POST['campo'];
$id=$_POST['id'];

$conn = new mysqli('localhost', 'root',"", "registro");
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_update = "update usuario set ".$_POST["campo"]."='".$_POST["valorM"]."' where id='".intval($_POST["id"])."' limit 1";

    $res = $conn->query($q_update);

    if(!$res){
      $result = 'Existi&oacute; un error al actualizar los datos.' . $conn->error;
    } else {
      $result = ' Los datos han sido actualizados con &eacute;xito.';
    }
  }

  
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
$contador=0;
  foreach ($usuarios as $usuario) {
    
    $celdasUsu .= 

'<tr>      
          <td >'.$usuario["id"].'</td>
          <td id="nombre' . $contador . '" data-campo="nombre" class="editable">'.$usuario["nombre"].'</td>
          <td id="email' . $contador . '"  data-campo="email" class="editable">'.$usuario["email"].'</td>
          <td id="direccion' . $contador . '" data-campo="direccion" class="editable">'.$usuario["direccion"].'</td>
          <td id="telefono' . $contador . '" data-campo="telefono" class="editable">'.$usuario["telefono"].'</td>
           <td id="usuario' . $contador . '" data-campo="usuario" class="editable">'.$usuario["usuario"].'</td>
          
          
        </tr>
       ';

   $contador++;

  }









  $salidaJSON=array("result" => $result,"celdasUsu" => $celdasUsu);

  echo json_encode( $salidaJSON);
}