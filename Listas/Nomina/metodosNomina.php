<?php
include_once("Nominas.php");
include_once("Empleados.php");
session_start();
if (isset($_SESSION["nomina"])==false) {
    $_SESSION["nomina"] = new Nomina();
}

$nombre = $_POST["name"];
$apellido = $_POST["lastname"];
$ciudad = $_POST["location"];
$edad = $_POST["age"];
$id = $_POST["id"];
$cargo = $_POST["cargo"];

if (isset($_POST["save"])==true) {
	$empleado = new Empleado($nombre,$apellido,$ciudad,$edad,$id,$cargo);
	$_SESSION["nomina"]->agregarEmpleado($empleado);
	echo "<script> alert('".$_SESSION["nomina"]->MostrarListadoEmpleados()."'); window.location.href='formNomina.php';</script>";
}elseif (isset($_POST["delete"])==true) {
	echo "<script> alert('Boton Bloqueado'); window.location.href='formNomina.php';</script>";
}elseif (isset($_POST["clean"])==true) {
	$_SESSION["nomina"]->LimpiarNomina();
	echo "<script> alert('Lista de empleados Borrada'); window.location.href='formNomina.php';</script>";
}
?>