<?php
echo '<html>';
echo '<head>';

echo '<title> pagina 100% php </title> ';
echo '<style>';
echo 'h1 {
	text-align :center;
}
.impar{

	background-color:#dddddd;
  text-align:right;

}

.par{

	background-color:#00CCFF;
  text-align:right;
}

table , th,td{
	border :1px solid #000000;
	border-collapse:collapse;
}

table tr:nth.child(even){

	background-color:#dddddd;
  
}

table tr:nth.child(odd){

	background-color:#dddddd;
  
}

body{

  background-color:#B2B2B2;
}

table{
  margin:auto;
}

table th{

  background-color:blue;
  color:white;

}



#form1 label
{
  width:100px;
}

input{

  margin-bottom:10px;
}

label{
  font-weight: bold;
  width: 200px;
}

';



echo '</style>';
echo '<body>';
echo '<h1> Este es el cuerpo de la pagina</h1>';
echo '<p> La siguiente tabla es generada por un while y un for de PHP.Las caracteristicas que debe tener esta tabla se muestra en la siguiente lista ordenanda (elemento <code>&lt;ol&gt;</code>): </p>';
echo '<ol>';
echo '<li>La Tabla esta centrada en la pantalla utilizando CSS</li>';
echo '<li>La cabecera tiene un fondo de color azul oscuro con letra blanca</li>';
echo '<li>Las filas pares son celestes y las filas impares son grises</li>';
echo '<li>Los numeros en las celdas estan alineados a la derecha </li>';
echo '<li> La tabla tiene un borde solido de color negro  </li>';
echo '</ol>';

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Columna 1</th>';
echo '<th>Columna 2</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$i = 0;
$es_impar = true;
while($i < 10){
  echo '<tr ' . ($es_impar ? 'class ="impar" ' : ' class ="par"') . '> ';
  $es_impar = ( $es_impar ? false : true );
  for($j = 0; $j < 2; $j++){
    echo '<td>';
    echo ++$i;
    echo '</td>';
  }
  echo '</tr>';
}

echo '</tbody>';



echo '</table>';

echo '<p> A continuacion tenemos un formulario HTML basico con las siguientes caracteristicas: </p> ';
echo '<ul>';
echo '<li>Las etiquetas estan enlanzadas con sus respectivos campos </li>';
echo '<li>Las etiquetas tienen un ancho de 100px y estan en negritas  </li>';
echo '<li> Los imput tienen un margen inferior de 10px; </li>';
echo '</ul>';
echo '<form id="form1">';
echo '<label for=Nombre >Nombre :</label><input type="text"  id="Nombre"/> ';
echo '<br>';
echo '<label for=Apellido >Apellido :</label><input type="text"  id="Apellido"/> ';
echo '<br>';
echo '<input type="button" value="Enviar" id="Apellido"/>';
echo '</form>';

echo '</body>';
echo '</html>';