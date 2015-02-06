<?php

include_once ("./config.php");

$user_app;
$password_app;
if (($_POST["usuario"] != null or $_POST["password"] != null) OR ($_GET["usuario"] != null or $_GET["password"] != null)) {
	//echo "usuario: ".$_POST["usuario"]." contraseña: ". $_POST["password"];
	if (isset($_POST["usuario"]) && isset($_POST['password'])) {
		$user_app = $_POST['usuario'];
		$password_app = $_POST['password'];
	} else {
		$user_app = $_GET['usuario'];
		$password_app = $_GET['password'];

	}

	if ($conexion = mysql_connect($host, $user, $password)) {

		$db = mysql_select_db($database);

		$query = "SELECT usuario, password FROM usuario WHERE usuario = '" . $user_app . "' AND password ='" . $password_app . "' LIMIT 1;";
		$consulta = mysql_query($query);
		$datos = mysql_fetch_row($consulta);

		if ($datos[0] == $user_app && $datos[1] == $password_app) {
			echo "successfull";
		} else {
			echo "error de autentificación";
		}
		mysql_close($conexion);

	} else {
		echo "no se puede conectar a la DB";
	}
}
?>