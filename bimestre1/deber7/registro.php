<?php
require('c_index.php');
?>
<?php
echo "<html>";
echo "<title> DEBER 3 </title> ";
echo '<style>';

echo "body{     

background-color:#EFF1F6;
color :#0E385F;
text-align:center;
}

#form { 

width: 500px;
height: 500px;
 
  position: absolute;
  top: 20%;
  left:35%;

}

#titulo1{
	
	text-align:left;
	color :#0E385F;
	font-size:20px;
}

#enlance{
	color :#3B59AE;
	font-size:13px;

}

#btnRegistrar{
	
	background-color:#669E51;
	color:white;
	width:150;
	height:35;
}

#txtBox
{
	border-color:#6D83B2;
	border-style:solid;
	width:300;
	height:35;
}



.selectSexo{

  width: 140px;
  position:relative;
}

}



"
;
echo '</style>';

echo '<body>';
echo '<div id ="form">';


echo "<p id ='titulo1'><b>Registrate</b></p>";
echo "<p id = 'titulo1'> Es gratis(y lo seguira siendo).</p>";
echo "<form action='' method='POST'>";
echo '<table>';

echo '<tr>';
echo '<td>';
echo 'Nombre';
echo '</td>';
echo '<td>';
echo '<input type="text" id="txtBox" value="" name="nombre">';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Apellidos';
echo '</td>';
echo '<td>';
echo '<input type="text" id="txtBox" value="" name="apellidos">';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Tu email';
echo '</td>';
echo '<td>';
echo '<input type="email" id="txtBox" value="" name="email">';
echo '</td>';
echo '</tr>';



echo '<tr>';
echo '<td>';
echo '<p>Escribe de nuevo <br>
         el correo<br>
         electronico </p> ';

echo '</td>';
echo '<td>';
echo '<input type="email" id="txtBox" value="" name="email2">';
echo '</td>';
echo '</tr>';


echo '<tr>';
echo '<td>';
echo '<p> Contraseña <br>
          nueva</p>';
echo '</td>';
echo '<td>';
echo '<input type="password" id="txtBox" value="" name="contrasena">';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<p> Confirmar <br>
          contraseña</p>';
echo '</td>';
echo '<td>';
echo '<input type="password" id="txtBox" value="" name="contrasena2">';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Sexo';
echo '</td>';
echo '<td>';
echo'<select name="sexo"><br>
<option>Selecciona el sexo</option>
<option value="f" name="sexo">Femenino</option>
<option value="m" name="sexo">Masculino</option>
</select>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<p>Fecha de<br> nacimiento</p>';
echo '</td>';
echo '<td>';
echo '<select name="dia">';
echo '<option value="">Dia</option>';
for($i=0 ;$i<=31;$i++)
{
echo "<option value='$i'>$i</option>";
}
echo '</select>';
echo '<select name="mes">
<option value="">Mes</option>
<option value="1">Enero</option>
<option value="2">Febrero</option>
<option value="3">Marzo</option>
<option value="4">Abril</option>
<option value="5">Mayo</option>
<option value="6">Junio</option>
<option value="7">Julio</option>
<option value="8">Agosto</option>
<option value="9">Septiembre</option>
<option value="10">Octubre</option>
<option value="11">Noviembre</option>
<option value="12">Diciembre</option>
</select>     ';
echo ' <select name="anio">';
echo '<option value="">Año</option>';
for($i=2015;$i>=1905;$i--)
{
echo "<option value='$i'>$i</option>";
}

echo '</select>';

echo '</td>';
echo '</tr>';

echo '<table>';

echo '<a href="pagina_deber.php" id="enlance" >¿Por que debo proporcionar esta informacion?</a> <br>';
echo '<br>';
echo '<button  id="btnRegistrar" name="registrar"> Registrate</button>';
echo '</form>';

echo '</div>';
echo '</body>';

echo "</html>";



?>

