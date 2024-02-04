<?php

function conectar(){

	$user="root";
	$pass="";
	$server="127.0.0.1";
	$db ="datos";

	$con = mysqli_connect( $server,$user,$pass ) or die( " Error al conectar base de datos "); 
    mysqli_select_db( $con,$db);

	return $con;
}




?>