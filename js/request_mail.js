//request de posteo al hacer click en el boton de enviar datos de contacto


$(function() {
	
	
	$(".numericOnly").keypress(function (e) {
		if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
	});
	

	$('#enviar').click(function(){
	
		if ( !validarForm() )
		{
			alert("Por favor, complete todos los campos antes de enviar.");
			return;
		}
		
		
		
		var data = {
			nombre: $("#nombre").val(),
			email: $("#email").val(),
			telefono: $("#telefono").val(),
			mensaje: $("#mensaje").val()
		};
		$.ajax({
			type: "POST",
			url: "email.php",
			data: data,
			success: function(){
				$('.success').fadeIn(1000);
			}
		});
		
		$("#nombre").val();
		$("#email").val();
		$("#telefono").val();
		$("#mensaje").val();
		alert("Consulta enviada, muchas gracias");
		$('body,html').animate({scrollTop : 0}, 500);
		
	});


function validarForm(){
	
	if( $("#nombre").val() =="" || $("#email").val() =="" || $("#telefono").val() =="" || $("#mensaje").val() =="" )
		return 0;
	
	return 1;	
}


});


