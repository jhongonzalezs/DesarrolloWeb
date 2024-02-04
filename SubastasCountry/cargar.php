<?php
session_start();/*Leer Sessiones Abiertas*/
$user= $_SESSION['id'];/*Sessiones id del usuario*/
include("conexion.php");/*Conexion de la base de datos*/
$con= conectar();/*Fincion Conectar*/
/*Validacion de los datos del articulo a subastar*/
if(isset($_FILES['img'])){
	$nombreImg=$_FILES['img']['name'];
	$ruta=$_FILES['img']['tmp_name'];
	$destino="Productos/".$nombreImg;
	$nombre=$_POST['nombre'];
	$inicial=$_POST['inicial'];
	$final=$_POST['final'];
	$categoria=$_POST['categoria'];
	$descripcion=$_POST['descripcion'];
	$usuario2=$_SESSION['Usuarios'];
	$correo=$_SESSION['correo'];
	$celular=$_SESSION['telef'];

/*Validacion de los valores de inicial hasta el terminar*/
if($final>$inicial){
	if(copy($ruta,$destino)){/*Insercion de los datos del articulo a subastar*/
		$sql="INSERT INTO `imagenes`(`imagen`,`ruta`,`nombre`,`inicial`,`final`,`categoria`,`descripcion`,`user_id`, `usuario`,`correo`,`celular`) VALUES ('$nombreImg','$destino','$nombre','$inicial','$final','$categoria','$descripcion', '$user', '$usuario2', '$correo','$celular')";
		$resultado=mysqli_query($con,$sql);
		if($resultado){
			echo '<script type="text/javascript"> alert("agregado Correctamente"); window.location="Categoria.php";</script>';/*Alerta de informacion*/
		}else{
			die("error".mysql_error($con));
		}
	}
}else{
	echo '<script type="text/javascript"> alert("El Valor Inicial no puede ser mayor al Final"); window.location="subastar.php";</script>';/*Sino De la Valicion de los valores*/
}
}


?>
