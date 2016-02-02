$(document).ready(function(){

	$('select#lista1').on('change',function(){
    
    
 if(lista1.value==1)
      {
      
       $("#lista1 option[value='1']").hide();
     }

   });


	$('select#lista2').on('change',function(){
    
    
 if(lista2.value==1)
      {
      
       $("#lista2 option[value='1']").hide();
     }

   });



})