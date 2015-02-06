<?php

include_once ("./config.php");

if ($conexion = mysql_connect($host, $user, $password)) {
	$db = mysql_select_db($database);

	$query = "INSERT INTO enfermedad( mascota_id, enfermedad, tratamiento, fecha) 
	VALUES('" . $_POST['mascota_id'] . "','" . $_POST['enfermedad'] . "','" . $_POST['tratamiento'] . "', '".$_POST['fecha']."');";
	mysql_query($query)or die(mysql_error());

}
?>