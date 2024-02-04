<?php

include("conexion.php");

$con= conectar();

$nombre = $_POST["nombre"];
$cedula = $_POST["cedula"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$telefono = $_POST["celular"];

$insertar= "INSERT INTO registros VALUES ('','$nombre','$cedula','$direccion','$correo','$contraseña','$telefono')";

$verificar= mysqli_query($con, "SELECT * FROM registros WHERE cedula= '$cedula'");
if(mysqli_num_rows($verificar)>0){
echo "<script type=''>
alert('Numero de cedula registrado');
</script>"; 
	exit;
}

$result =mysqli_query($con,$insertar);

if (!$result){

	echo "Error al registrarse";
}else{
	echo '<script type="text/javascript"> alert("Usuario Registrado Correctamente"); window.location="Login.php";</script>';
}



//cerrar conexion
mysqli_close($con);


?>