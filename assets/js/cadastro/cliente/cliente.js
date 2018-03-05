$( document ).ready( function(){

	var base_url				= $("#base_url").val();
	var nome 				= $("#nome");
	var cpf 				= $("#cpf");
	var telefone 				= $("#telefone");
	var celular 				= $("#celular");
	var sexo 				= $("#sexo");
	var email 				= $("#email");
	var cep 				= $("#cep");
	var logradouro 			= $("#logradouro");
	var numero_casa 			= $("#numero_casa");
	var bairro 				= $("#bairro");
	var cidade 				= $("#cidade");
	var uf 					= $("#uf");
	var complemento 			= $("#complemento");
	var btn_finalizar 			= $("#btn_finalizar");
	var form_inserir_cliente 		= $("#form_inserir_cliente");

	nome.focus();

	// MASCARAS
	cpf.mask('000.000.000-00');
	telefone.mask( '(00)0000-0000' );
	celular.mask( '(00)00000-0000' );
	cep.mask( '00.000-000' );

	cep.on('blur', function(){

		buscarCep(cep.val());

	})

	btn_finalizar.on('click', function(){

		if( nome.val() == '' )
		{

			modal('Aviso!', 'Nome deve ser informado.');
			nome.focus();

			return false;

		}

		if( cpf.val() == '' )
		{

			modal('Aviso!', 'CPF deve ser informado.');
			cpf.focus();

			return false;

		}

		if( celular.val() == '' )
		{

			modal( 'Aviso!', 'Celular deve ser informado.' );
			celular.focus();

			return false;

		}

		if( email.val() == '' )
		{

			modal( 'Aviso!', 'E-mail deve ser informado.' );
			email.focus();

			return false;

		}

		if( cep.val() == '' )
		{

			modal( 'Aviso!', 'CEP deve ser informado.' );

		}

		if( numero_casa.val() == '' )
		{

			modal('Aviso!', 'Numero da casa deve ser informado.');
			numero_casa.focus();

			return false;

		}

		var dados = form_inserir_cliente.serialize();

		$.ajax({

			url: base_url + 'Cliente/inserir_cliente',
			type: 'post',
			datatype: 'json',
			data: dados,
			success: function(data)
			{

				if( data == 'true' )
				{

					$("#sa-sucesso").click();

					limpar_campos();

				}
				else
				{

					$("#sa-falha").click();

				}

			}

		})

	})

} );

function modal( titulo, msg )
{

	var modal_alerta = $("#modal_alerta");
	var titulo_modal = $("#titulo_modal");
	var msg_modal = $("#msg_modal");

	modal_alerta.modal();
	titulo_modal.html( titulo );
	msg_modal.html( msg ).css( { 'text-align': 'center' } );

}

function limpar_campos()
{

	var base_url				= $("#base_url").val();
	var nome 				= $("#nome");
	var cpf 				= $("#cpf");
	var telefone 				= $("#telefone");
	var celular 				= $("#celular");
	var sexo 				= $("#sexo");
	var email 				= $("#email");
	var cep 				= $("#cep");
	var logradouro 			= $("#logradouro");
	var numero_casa 			= $("#numero_casa");
	var bairro 				= $("#bairro");
	var cidade 				= $("#cidade");
	var uf 					= $("#uf");
	var complemento 			= $("#complemento");
	var btn_finalizar 			= $("#btn_finalizar");
	var form_inserir_cliente 		= $("#form_inserir_cliente");

	nome.focus();
	nome.val('');

	cpf.focus();
	cpf.val('');

	telefone.focus();
	telefone.val('');

	celular.focus();
	celular.val('');

	sexo.focus();
	sexo.val('');

	email.focus();
	email.val('');

	cep.focus();
	cep.val('');

	logradouro.focus();
	logradouro.val('');

	numero_casa.focus();
	numero_casa.val('');

	bairro.focus();
	bairro.val('');

	cidade.focus();
	cidade.val('');

	uf.focus();
	uf.val('');

	complemento.focus();
	complemento.val('');


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
    $('#sa-sucesso').click(function(){
        swal("Sucesso!", "Cliente "+$("#nome").val()+" cadastrado com sucesso.", "success")
    });

        //Error Message
    $('#sa-error').click(function(){
        swal("Falha!", "Funcionário não encontrado, por favor verifique o nome de usuário e a senha.", "error")
    });

	$('#sa-falha').click(function(){
		swal("Falha!", "Falha ao cadastrar cliente.", "error")
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