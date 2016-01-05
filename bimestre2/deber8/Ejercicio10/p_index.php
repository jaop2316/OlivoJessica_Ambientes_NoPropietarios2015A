<?php


$conexion= mysql_connect("localhost","root","");

mysql_select_db("intereses",$conexion) or die("No se puede conectar");


 foreach($_POST as $key => $valor){ 
 	$valor2=(float)$valor;

    
  $query="INSERT INTO datosInt (Id_Interes,interes) values (null,'{$valor2}'); ";

   mysql_query($query,$conexion);
   
   
}