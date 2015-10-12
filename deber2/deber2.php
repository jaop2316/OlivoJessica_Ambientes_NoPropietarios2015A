<?php

$numeros=array();
$divisibles=0;


function crearTabla()
{

echo '<table border="1" align=center>';
for($i = 0 ;$i<100 ;$i++)
{

	$numeros[$i]= $i;
     echo '<td>';
    echo ($numeros[$i] );
	echo '</td>';
	if($i==9 || $i==19  || $i==29 || $i==39 || $i==49 || $i==59 || $i==69 || $i==79 || $i==89 )
       {

       echo'<tr>';
       echo '<tr>';
       }

   }
echo '</table>';
}


function numeroPrimo($num)
{

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
<body>

<h1> TABLA DE LOS NUMEROS PRIMOS </h1>

<?php

crearTabla();

?>


</body> 
</html> 