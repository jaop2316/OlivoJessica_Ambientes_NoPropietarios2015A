

function rellenar() {
tabla=document.getElementById("tabla1").rows

for(i=0;i<tabla.length;i++){
		color(i);
	}
}

function color(a)
{
   
   if(a%2==0)

   tabla[a].style.backgroundColor="red";

    else

    tabla[a].style.backgroundColor="green";


}


