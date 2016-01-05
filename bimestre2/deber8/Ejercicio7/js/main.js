$(document).ready(function() {

	$("#mensaje").hide();

$("p").hover(

	function(){

          $("#mensaje2").hide();
		 $("#mensaje").show();

      },

      function(){
       
        $("#mensaje").hide();
        $("#mensaje2").show();
      }

);
});