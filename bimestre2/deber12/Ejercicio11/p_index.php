<?php
//if (isset($_POST['Agregar']){

$conexion= mysql_connect("localhost","root","");

mysql_select_db("intereses",$conexion) or die("No se puede conectar");


 foreach($_POST as $key => $valor){ 
 $query2="SELECT * FROM datosInt where Id_Interes='$key'; ";
 $filas=mysql_query($query2,$conexion);
}

 $filas_datos = mysql_num_rows($filas);
 if($filas_datos==0){
 	 foreach($_POST as $key => $valor){ 
$query="INSERT INTO datosInt (Id_Interes,interes) values (NULL,'{$valor}'); ";
mysql_query($query,$conexion);
}
}
else{
die($conn ->error);
 }






echo '<pre>';
print_r($_POST);
echo '</pre>';
 
   
    


