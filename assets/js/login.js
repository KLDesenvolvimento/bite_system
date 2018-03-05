$( document ).ready( function(){

	var base_url 		= $("#base_url").val();
	var usuario 		= $("#usuario");
	var senha 		= $("#senha");
	var btn_entrar 	= $("#btn_entrar");
	var alerta_login 	= $("#alerta_login");

	usuario.focus();

	btn_entrar.on( 'click', function(){

		if( usuario.val() == '' )
		{

			alerta_login.removeAttr('style').html('Nome de usuário deve ser preenchido.');

			setTimeout( function(){

				alerta_login.css('display', 'none');

			},3000 )

			usuario.focus();

			return false;

		}

		if( senha.val() == '' )
		{

			alerta_login.removeAttr('style').html('Senha deve ser informada.');

			setTimeout( function(){

				alerta_login.css('display', 'none');

			},3000 )

			senha.focus();

			return false;

		}

		logar();

	} )

	usuario.on( 'keypress', function(e){

		if( e.which == 13 )
		{

			if( usuario.val() == '' )
			{

				alerta_login.removeAttr('style').html('Nome de usuário deve ser preenchido.');

				setTimeout( function(){

					alerta_login.css('display', 'none');

				},3000 )

				usuario.focus();

				return false;

			}

			if( senha.val() == '' )
			{

				alerta_login.removeAttr('style').html('Senha deve ser informada.');

				setTimeout( function(){

					alerta_login.css('display', 'none');

				},3000 )

				senha.focus();

				return false;

			}

			logar();

		}

	} )

	senha.on( 'keypress', function(e){

		if( e.which == 13 )
		{

			if( usuario.val() == '' )
			{

				alerta_login.removeAttr('style').html('Nome de usuário deve ser preenchido.');

				setTimeout( function(){

					alerta_login.css('display', 'none');

				},3000 )

				usuario.focus();

				return false;

			}

			if( senha.val() == '' )
			{

				alerta_login.removeAttr('style').html('Senha deve ser informada.');

				setTimeout( function(){

					alerta_login.css('display', 'none');

				},3000 )

				senha.focus();

				return false;

			}

			logar();
			
		}

	} )

} );

function logar()
{

	var base_url 		= $("#base_url").val();
	var usuario 		= $("#usuario");
	var senha 		= $("#senha");
	var btn_entrar 	= $("#btn_entrar");
	var alerta_login 	= $("#alerta_login");

	var dados = $("#form_login").serialize();

	$.ajax({

		url:base_url + 'Login/logar',
		data:  dados , 
		type: 'post',
		success: function(data)
		{

			var data = JSON.parse( data );

			if( data )
			{

				window.location.href = base_url + 'home';

			}
			else
			{

				$("#sa-error").click();

			}

		}

	});

}


!function($) {
    "use strict";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
    $('#sa-basic').click(function(){
        swal("Here's a message!");
    });

    //A title with a text under
    $('#sa-title').click(function(){
        swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.")
    });

    //Success Message
    $('#sa-success').click(function(){
        swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.", "success")
    });

        //Error Message
    $('#sa-error').click(function(){
        swal("Falha!", "Funcionário não encontrado, por favor verifique o nome de usuário e a senha.", "error")
    });

    //Warning Message
    $('#sa-warning').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
        });
    });

    //Parameter
    $('#sa-params').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "No, cancel plx!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
                swal("Deleted!", "Your imaginary file has been deleted.", "success");   
            } else {     
                swal("Cancelled", "Your imaginary file is safe :)", "error");   
            } 
        });
    });

    //Custom Image
    $('#sa-image').click(function(){
        swal({   
            title: "Govinda!",   
            text: "Recently joined twitter",   
            imageUrl: "../assets/images/users/1.jpg" 
        });
    });

    //Auto Close Timer
    $('#sa-close').click(function(){
         swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
    });


    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);