<?php
if($_POST){
    $name = $_POST['nombre'];
    $email = $_POST['email'];
	$telefono = $_POST['telefono'];
    $message = $_POST['mensaje'];

	$texto = 'La persona:' + $name + ', cuyo email es:' + $email + ',de telefono:' + $telefono + ' te ha envíado el siguiente mensaje:' + $message; 
	
	//send email
	mail("consultas@pekes-eventos.com.ar", "Mensaje de pagina", $texto);
}
?>