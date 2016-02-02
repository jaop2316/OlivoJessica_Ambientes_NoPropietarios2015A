$(document).ready(function(){

 $("form#usuario").validate({
 	rules :{

 		nombre: {
 			required:true,
 			minlength: 2

 		},

 		email: {
 			required:true,
 			email:true
 			

 		},

 		telefono :{
 			required:true,
 			minlength: 9

 		},

 		contrasenia: {

 			required:true,
 			minlength: 4
 		},

        contrasenia2:{

            required:true,
        	equalTo:"#contrasenia"
        },

        usuario :{

        	required:true,
        	remote: {

        url: "rpc/validar_usuario.php",
        type: "post"


        	}
    }


 	},

messages:{

	nombre:{

		required:"Es necesario ingresar tu nombre",
		 minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	email:{

		required:"Es necesario ingresar un email , para completar el registro",
		email: "Por favor , Ingrese un email valido"
	},

	telefono :{

		required:"Por favor , Ingrese su numero telefonico",
		minlength:$.validator.format("Al menos {0} caracteres requeridos")
	},
	contrasenia:{

		required:"Es necesario que escriba una contraseña para el registro",
		minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	contrasenia2:{

		required: "Por favor repita la contraseña , para su confirmacion.",
		equalTo: "La contraseña debe ser igual a la que ingreso antes"
	},

	usuario: {

		required:"Por favor ingrese el nombre de usuario, para continuar con el registro",
		remote:"El usuario ya esta registrado , intente con otro"
	}


}

 });






})
	