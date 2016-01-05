$(document).ready(function() {

function contar(){ 

cajas=document.getElementsByTagName("input"); 
cont=0; 
for (i=0;i<cajas.length;i++){ 
if(cajas[i].type=="text")
  {
    cont++;
  } 
} 
return cont;
} 
 
var cont=contar();
var contenedor = $('#contenedor_'+cont).html();
var i = cont+1;

$("#btnAgregar").on('click', function(e){
    e.preventDefault();


    $('#contenedor_' + (i -1)).after('<div id="contenedor_' + i + '" class="contenedor"> ' + contenedor + '</div>');
    $('#contenedor_' + i + ' label').text('Interes ' + i);
    $('#contenedor_' + i + ' input').attr({
      id: 'interes' + i,
      name: 'interes' + i
    });
   i++;
   
   
  });


$('#btnEliminar').on('click', function(e) {
    e.preventDefault();
    if(i > 2){
      $('#contenedor_' + (i -1)).remove();
      i--;
    } else {
      alert("no se puede eliminar el ultimo elemento");
    }
    
 });
  


});