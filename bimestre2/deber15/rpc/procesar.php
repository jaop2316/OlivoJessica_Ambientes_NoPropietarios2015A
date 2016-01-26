<?php
$result="";
if($_POST){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$provincia=$_POST['provincia'];
$canton=$_POST['canton'];
$parroquia=$_POST['parroquia'];
$usuario=$_POST['usuario'];
$contrasenia=md5($_POST['contrasenia']);


$conn = new mysqli('localhost', 'root',"", "registro");
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuario(nombre,email,telefono,direccion,provincia,canton,parroquia,usuario,contrasenia)
                  VALUES ('$nombre', '$email', '$telefono', '$direccion','$provincia','$canton','$parroquia','$usuario','$contrasenia')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
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
          <td class="id" data-campo="id">'.$usuario["id"].'</td>
          <td id="nombre' . $contador . '" data-campo="nombre" class="editable" ><span>'.$usuario["nombre"].'</span></td>
          <td id="email' . $contador . '" data-campo="email" class="editable"><span>'.$usuario["email"].'</span></td>
          <td id="direccion' . $contador . '" data-campo="direccion" class="editable" ><span>'.$usuario["direccion"].'</span></td>
          <td id="telefono' . $contador . '" data-campo="telefono" class="editable"><span>'.$usuario["telefono"].'</span></td>
           <td id="usuario' . $contador . '" data-campo="usuario" class="editable"><span>'.$usuario["usuario"].'</span></td>
          
          
        </tr>
       ';



  }

  



$salidaJSON=array("result" => $result,"celdasUsu" => $celdasUsu);

echo json_encode( $salidaJSON );
?>