
<?php 
/*

error_reporting(0); 
$nombre = $_POST['nombre']; 
$email= $_POST['email']; 
$message = $_POST['mensaje'];
$header = 'From: ' . $email."\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $email . " \r\n"; 
$mensaje .= "Su consulta es:" . $message . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'fran.ferron07@gmail.com'; 
$asunto = 'Consulta desde pagina web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'mensaje enviado correctamente'; 
*/





1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
	
/*
	if (isset($_POST["submit"])) {
		$name = $_POST['nombre'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$message = $_POST['mensaje'];
		$from = 'Mensaje desde pagina'; 
		$to = 'consultas@pekes-eventos.com.ar'; 
		$subject = 'From:' . $email."\r\n";
		
		$body = "From: $name\n E-Mail: $email\n Telefono: $telefono\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage ) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
*/


	if (isset($_POST["submit"])) {
		$name = $_POST['nombre'];
		$email = $_POST['email'];
		$message = $_POST['mensaje'];
		$from = 'Demo Contact Form'; 
		$to = 'fran.ferron07@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage ) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
	
?>


