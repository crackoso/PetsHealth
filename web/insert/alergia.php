<?php

include_once ("./config.php");

echo "Mascota: " . $_POST['mascota_id'] . " alergia: " . $_POST['alergia'];
if ($conexion = mysql_connect($host, $user, $password)) {
	echo "si entra al if";
	$db = mysql_select_db($database);

	$query = "INSERT INTO alergia( mascota_id, alergia) 
	VALUES('" . $_POST['mascota_id'] . "','" . $_POST['alergia'] . "');";
	mysql_query($query)or die(mysql_error());

}
?>