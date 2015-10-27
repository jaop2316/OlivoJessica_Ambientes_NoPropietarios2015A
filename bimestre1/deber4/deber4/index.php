<?php

echo '<html>';
echo '<title>INDEX </title>';
echo '<style>';

echo '    

body{

   
}

   #encabezado{

	position:relative;
	background-color:black;
	color:white;
	width:1350px;
	height:50px;
}

#info{
	
	background-color:#E0E0E0;
	color:black;
	height:350px;
	width:1350px;
	float:left;
	text-align:left;
	
}

#seccion{
	
	text-align:center;
    background-color:white;
    height:350px;
	width:1350px;
	float:left;
}

#btnLearn{
	
	background-color:#4791FF;
	color:white;
	height:35px;
	border-radius: 7px 7px 7px 7px;
}

#tituloT
{
	font-size:25px;
}

#infoT
{
	font-size:12px;
}

#btnDetails{
	
	background-color:white;
	height:30px;
}

#btnIngresar{
	
	background-color:#669E51;
	color:white;
	width:75;
	height:25;
}

#pCabecera{
	
	color:white;
}

#parrafo{
	

	text-align:left;
    margin: 30px 20%;
}

h1{
	text-align:left;
	font-size:40px;
}

#enlance{

	color :white;
}

';

echo '</style>';
echo '<body>';
echo '<div id="encabezado">';
echo '<br>';
echo '<table align="left">';
echo '<tr>';
echo '<td>';
echo '&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp';
echo '</td>';
echo '<td>';
echo '<p id="pCabecera"> Pagina de Prueba &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </p>';
echo '</td>';
echo '<td>';
echo '<input type ="text" id="txtBoxE" placeholder="Email">';
echo '<input type ="text" id="txtBoxE" placeholder="Contraseña">';
echo '</td>';
echo '<td>';
echo '<input type="button" value="Ingresar" id="btnIngresar">';
echo '</td>';
echo '<td>';
echo '<a href="registro.php" id="enlance" >Registrarme</a> <br>';
echo '</td>';
echo '</tr>';
echo '</table>';

echo '</div>';
echo '<div id="info">';
echo '<div id="parrafo">';
echo '<h1>Lorem ipsum dolor sit amet ,consectetur <br> adipiscing elit. </h1>';
echo '<p> Lorem ipsum dolor sit amet,consectetur adipiscing elit.Aenean auctor vita eauge eu ornare. Lorem ipsum dolor sit amet ,<br>
          consectur adipiscing elit.Morbi sit amet nec neque congue vulputate sit amet ac dolor .Duis eu quam libero. Etiam <br>
          egestas id nunc at elmentun . Nullam vitae orci aliquam , lobortis nulla in consectetur leo. Lit eu dolor quis risus vehicula<br>
          faucibus ac convalis sapien .Nulla portitor , ipsum vitae maximus eusimod , metus lectus eusimod ex. ac bibedum erat <br>
          mauris sit amet magna . Donec lacnia omare molestie . Cras ac eusimod dolor .Mauris voluptad id arcu vitae fementun <br>
          Nunc tempus faucibus auctor . Etiam imperdiet erat ex .Maecenas congue eget telluis in scelerisque .Nulla eu convalis velit, <br>
          at rhoncus dui.  
  </p>';

 echo ' <input type="button" value="Learn More >>" id="btnLearn"> ';
 echo '</div>';
echo '</div>';
echo '<div id="seccion">';
echo '<br>';
echo '<table align="center">';
echo '<tr>';
echo '<td>';
echo '<p id="tituloT"> Cabecera</p>';
echo '</td>';
echo '<td>';
echo '<p id="tituloT"> Cabecera</p>';
echo '</td>';
echo '<td>';
echo '<p id="tituloT"> Cabecera</p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo '<p id="infoT">Donec id elit nom mi porta gravida at eget metus.Fusce<br>
      dapibus, tellus ac cursus commodo. tortor mauris<br>
      condimetum nibh , ut fermentum massa justo sit amet <br>
      risus.Etiam porfa sem malesuda magna mollis euismod<br>
      Donec sed odio dui.
</p>';
echo '</td>';
echo '<td>';
echo '<p id="infoT">Donec id elit nom mi porta gravida at eget metus.Fusce<br>
      dapibus, tellus ac cursus commodo. tortor mauris<br>
      condimetum nibh , ut fermentum massa justo sit amet <br>
      risus.Etiam porfa sem malesuda magna mollis euismod<br>
      Donec sed odio dui.
</p>';
echo '</td>';
echo '<td>';
echo '<p id="infoT">Donec id elit nom mi porta gravida at eget metus.Fusce<br>
      dapibus, tellus ac cursus commodo. tortor mauris<br>
      condimetum nibh , ut fermentum massa justo sit amet <br>
      risus.Etiam porfa sem malesuda magna mollis euismod<br>
      Donec sed odio dui.
</p>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo ' <input type="button" value="View Details>>" id="btnDetails"> ';
echo '</td>';
echo '<td>';
echo ' <input type="button" value="View Details>>" id="btnDetails"> ';
echo '</td>';
echo '<td>';
echo ' <input type="button" value="View Details>>" id="btnDetails"> ';
echo '</td>';
echo '</tr>';
echo '</table>';

echo '</div>';

echo '</body>';

echo '</html>';





?>