//request de posteo al hacer click en el boton de enviar datos de contacto


$(function() {

$('#enviar').click(function(){
	
    var data = {
		nombre: $("#nombre").val(),
		email: $("#email").val(),
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
	alert("Consulta enviada, muchas gracias");
});


});