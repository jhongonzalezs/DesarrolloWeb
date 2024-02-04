<?php
SESSION_START();
$usuario= $_POST['correo'];
$password=$_POST['contraseña'];

if (isset($usuario,$password)){

include 'conexion.php';
$con= conectar();

$consulta=mysqli_query($con, "SELECT * FROM registros WHERE correo=('$usuario')  AND contrasena=('$password')");
if(mysqli_num_rows($consulta) > 0){

	$result=mysqli_fetch_array($consulta);
      //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario 
      $_SESSION["autentica"] = "SIP"; 
      $_SESSION['correo'] =  $_POST['correo'];
      $_SESSION['Usuarios'] =  $result['nombre'];
      $_SESSION['id'] =  $result['id_user'];
      $_SESSION['telef'] =  $result['celular'];
      
      //Direccionamos a nuestra página principal del sistema. 
      header ("Location: pagina.php");
}else{
	echo '<script type="text/javascript"> alert("Correo/Contraseña Incorrecto"); window.location="Login.php";</script>';
}

}else{
	header("Location: Login.php");
}

mysqli_free_result($consulta);
mysqli_close($con);

?>