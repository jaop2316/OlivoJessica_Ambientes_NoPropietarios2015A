<?php





function generar_tabla(){
		echo "<table id='tabla' >" ;
		echo "<caption>NUMEROS PRIMOS</caption>";
		$i = 0 ;
		while ( $i < 100 ) {
			echo "<tr>" ;
			for ( $j = 0 ; $j < 10 ; $j++ ) { 
				$primo = numeroPrimo( $i );

				echo '<td' . ($primo ? ' class="numpri"' : '') . '>';
				echo $i++ ;
				echo "</td>" ;
			}
			echo "</tr>" ;
		}
		echo "</table>" ;
	}


function numeroPrimo($num)
{
$divisibles=0;

for($j=1;$j<=$num;$j++)
	{

		if($num%$j==0)
		{
			$divisibles ++;
			
        }
	}

	if($divisibles==2)
	{
       return true;

	}

}

?>



<html>
<head>
<title> DEBER 2</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
 </head>
<body>

<h1 > TABLA DE LOS NUMEROS PRIMOS </h1>

<?php

generar_tabla();

?>


</body> 
</html> 