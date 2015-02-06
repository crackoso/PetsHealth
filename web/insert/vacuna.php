<?php

include_once ("./config.php");

echo "Mascota: " . $_POST['mascota_id'] . " vacuna: " . $_POST['vacuna'];
if ($conexion = mysql_connect($host, $user, $password)) {
	echo "si entra al if";
	$db = mysql_select_db($database);

	$query = "INSERT INTO vacuna( mascota_id, vacuna, fechaaplicacion) 
	VALUES('" . $_POST['mascota_id'] . "','" . $_POST['vacuna'] . "', '" . $_POST['fecha'] . "');";
	mysql_query($query)or die(mysql_error());

}
?>