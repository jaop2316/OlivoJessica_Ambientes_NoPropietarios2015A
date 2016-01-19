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
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
  }
}