<?php

include_once ("./config.php");

if ($conexion = mysql_connect($host, $user, $password)) {
	$db = mysql_select_db($database);

	//INSERT INTO  `usuario` (`nombre` ,  `email` ,  `usuario` ,  `password` ,  `version` )  VALUES ( NULL ,  'prueba',  'prueba@prueba.com',  'prueba',  'prueba',  '0');
	$query = "INSERT INTO usuario (nombre, email, usuario, password, version, mailing) VALUES('" . $_POST['nombre'] . "', '" . $_POST['email'] . "' , '" . $_POST['usuario'] . "' , '" . $_POST['password'] . "','" . $_POST['version'] . "', '1');";
	//falta recibir el idioma del teléfono

	mysql_query($query);

	include_once ("../../../PHPMailer/class.phpmailer.php");
	include_once ("../../../PHPMailer/class.smtp.php");
	$mail = new PHPMailer();
	$mail -> IsSMTP();
	$mail -> SMTPAuth = true;
	$mail -> SMTPSecure = "ssl";
	$mail -> Host = "smtp.gmail.com";
	$mail -> Port = 465;

	$mail -> From = "crack.oso@gmail.com";
	$mail -> FromName = "Pet's Health";
	$mail -> Subject = "Bienvenido a Pet's Health";
	$mail -> AltBody = "";
	$mail -> MsgHTML("Hola <b>" . $_POST['nombre'] . "</b>, gracias por descargar nuestra aplicación, esperamos que la disfrutes.");
	//$mail -> AddAttachment("files/files.zip");
	//$mail -> AddAttachment("files/img03.jpg");
	$mail -> AddAddress($_POST["email"], $_POST["nombre"]);
	//$mail -> IsHTML(true);
	$mail -> Send();

} else {
	echo "no hay nada";
}
?>