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

echo '<table>';

echo '<tr>';
echo '<td>';
echo 'Nombre';
echo '</td>';
echo '<td>';
echo '<input type="text" id="txtBox">';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Apellidos';
echo '</td>';
echo '<td>';
echo '<input type="text" id="txtBox">';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Tu email';
echo '</td>';
echo '<td>';
echo '<input type="text" id="txtBox">';
echo '</td>';
echo '</tr>';



echo '<tr>';
echo '<td>';
echo '<p>Escribe de nuevo <br>
         el correo<br>
         electronico </p> ';

echo '</td>';
echo '<td>';
echo '<input type="text" id="txtBox">';
echo '</td>';
echo '</tr>';


echo '<tr>';
echo '<td>';
echo '<p> Contraseña <br>
          nueva</p>';
echo '</td>';
echo '<td>';
echo '<input type="text" id="txtBox">';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo 'Sexo';
echo '</td>';
echo '<td>';
echo'<select name="sexo"><br>
<option value="">Selecciona el sexo</option>
<option>Femenino</option>
<option>Masculino</option>
</select>';
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>';
echo '<p>Fecha de<br> nacimiento</p>';
echo '</td>';
echo '<td>';
echo '<select name="Dia">
<option value="">Dia</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
';
echo '<select id="Mes">
<option value="">Mes</option>
<option>Enero</option>
<option>Febrero</option>
<option>Marzo</option>
<option>Abril</option>
<option>Mayo</option>
<option>Junio</option>
<option>Julio</option>
<option>Agosto</option>
<option>Septiembre</option>
<option>Octubre</option>
<option>Noviembre</option>
<option>Diciembre</option>
</select>     ';
echo ' <select id="año">
<option value="">Año</option>
<option>1940</option>
<option>1941</option>
<option>1942</option>
<option>1943</option>
<option>1944</option>
<option>1945</option>
<option>1946</option>
<option>1947</option>
<option>1948</option>
<option> 1949</option>
<option>1950</option>
<option>1951</option>
</select>           ';

echo '</td>';
echo '</tr>';

echo '<table>';





echo '<a href="pagina_deber.php" id="enlance" >¿Por que debo proporcionar esta informacion?</a> <br>';
echo '<br>';
echo '<input type="button" value="Registrate" id="btnRegistrar"> ';

echo '</div>';
echo '</body>';

echo "</html>";



?>