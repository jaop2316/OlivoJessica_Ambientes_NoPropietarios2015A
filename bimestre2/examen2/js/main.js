$(document).ready(function(){
	$('form#estudiante').validate({
     
     	rules:{

     		nombre:{

     			required:true,
     			minlength:2
     		},

            apellido:{

     			required:true
     			
     		}, 

     		email:{

     			required:true,
     			email:true,
     			remote:{

     				url: "rpc/verificar_email.php",
        			type: "post",
                    dataType:"json",
        			data:{
         				email: function(){
            			return $('#email').val();
          					}
          				}
     				}
            },

            contrasenia:{
            	required:true,
            	minlength:4
            },

            contrasenia2:{
            	required:true,
            	equalTo:"#contrasenia"
            }


     	},

     	messages:{
            
            nombre:{
            	required:"Es necesario ingresar tu nombre para seguir con el registro",
            	minlength:$.validator.format("Al menos {0} caracteres requeridos")
			},

			apellido:{
            	required:"Es necesario ingresar tu Apellido para seguir con el registro"
            	
			},

			email:{

				required:"Por favor ingresa el email para continuar con el registro",
				email:"Ingresa un formato de email valido",
				remote :"El email que ingreso ya existe , intente con otro"
			},

			contrasenia:{
				required:"Por favor ingresa una contraseña para continuar con el registro",
				minlength:$.validator.format("Al menos {0} caracteres requeridos")
			},

			contrasenia2:{
				required:"Por favor ingresa de nuevo la contraseña para cumplir con la verificacion",
				equalTo:"La contraseña deber ser igual a la ingresada antes"
			}


         

        }


     	});


	$('#btnRegistrate').on('click', function(e) {
		event.preventDefault();
		if($('form#estudiante').valid())
		{
			$.ajax({
				url: 'rpc/procesar.php',
				type: 'POST',
				dataType: 'json',
				data: {

         			 nombre:$('form#estudiante #nombre').val(),
         			 apellido:$('form#estudiante #apellido').val(),
         			 email:$('form#estudiante #email').val(),
         			 contrasenia:$('form#estudiante #contrasenia').val(),
					},
					})
					.done(function(msg) {
					$('#estudiante').trigger("reset");
                    if(msg="true")
                    {
					window.location.href='index.php';
                    }
                    else
                    {
                        alert("No se realizo el registro")
                    }
					console.log("success");
					})
					.fail(function() {
					console.log("error");
					})
					.always(function() {
					console.log("complete");
					});
		
        }

			});
    
    $('#btnCancelar').on('click', function(e) {
     	event.preventDefault();
     	window.location.href='index.php';
     });

    /*$('#btnIniciar').on('click',function(e) {
    	event.preventDefault();
    	$.ajax({
    		url: 'rpc/inicio_sesion.php',
    		type: 'POST',
    		//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
    		data: {
    			email:$('form#inicio #email').val(),
    			contrasenia:$('form#inicio #contrasenia').val()
    		},
    	})
    	.done(function(msg) {
    		if(msg=="true")
    		{
    			//window.location.href='matriculacion.php';
    		}
    		else{
    			alert("El usuario o contraseña ingresados no son correctos")
    			$('#inicio').trigger("reset");
    		}

    		console.log("success");
    	})
    	.fail(function() {
    		console.log("error");
    	})
    	.always(function() {
    		console.log("complete");
    	});
    	

    });*/

    $('#nivel').on('change',function(e) {
        event.preventDefault();
        
        $.ajax({
            url: 'rpc/get_materias.php',
            type: 'POST',
           // dataType: 'json',
            data: {
                nivel:$('#nivel').val()
        },
        })
        .done(function(msg) {
            $('#lstMaterias').html(msg);
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        

    });
    
    var mats=[];
    $('#btnRegistrarMaterias').on('click', function(e) {
        event.preventDefault();
        $('input[type=checkbox]').each(function(){
            if (this.checked) {
                mats.push($(this).val());
            }
        }); 
        $.ajax({
            url: 'rpc/registrarMaterias.php',
            type: 'POST',
           dataType: 'json',
            data: {
                materias: mats
        },
        })
        .done(function(msg) {
            $('#mensaje').html(msg.result);
            $('#materias_registradas tbody').html(msg.regisMaterias)
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        


    });

       
	});











