<?php

include_once ("./config.php");

if ($conexion = mysql_connect($host, $user, $password)) {

	$db = mysql_select_db($database);

	$query = "INSERT INTO mascota(usuario_id, nombre, fechanacimiento, especie, raza, tamano, sexo) 
	VALUES('" . $_POST['usuario_id'] . "','" . $_POST['nombre'] . "','" . $_POST['fechanacimiento'] . "','" . $_POST['especie'] . "','" . $_POST['raza'] . "','" . $_POST['tamano'] . "','" . $_POST['sexo'] . "');";
	mysql_query($query);

}
?>