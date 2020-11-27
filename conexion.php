<?php

	$db_host="localhost";
	$db_user="root";
	$db_pass="Uvg2017";
	$db_name="inventario";
	
	$conexion=mysqli_connect($db_host,$db_user,$db_pass,$db_name);	
	if (mysqli_connect_errno()){
		die("fallo: %s\n" + mysqli_connect_error());
		exit();
	}
?>