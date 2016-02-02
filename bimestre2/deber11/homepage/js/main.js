$(document).ready(function()
{

$('.btn-search').on('click', function(e){

e.preventDefault();

});

$('.btn-search').popover({

content: '<div class="form-group"> <input type="text" class="form-control" placeholder="Buscar"></div> ',
html:true,
placement:'botton',



	});


});