<?php
include("conexion.php");/*Conexion de la base de datos*/
$con= conectar();/*Fincion Conectar*/
$correo= $_POST['email'];
$consulta = mysqli_num_rows($con, "SELECT * FROM registros WHERE correo = $correo");
if (isset($correo)){
	if($consulta)

}


?>
<form method="POST">
                            <h3 class="legend">Recuperacion De Clave</h3>
                            <div class="input">
                                <span class="fa fa-user-o" aria-hidden="true"></span>
                                <input type="text" onkeypress="return soloLetras(event)" placeholder="Nombre Completo" name="nombre" autocomplete="off" required>
                            </div>
                            <div class="input">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                <input type="email" placeholder="alguien@email.com" name="correo" autocomplete="off" required>
                            </div>
                            <div class="input">
                                <span class="fa fa-id-card" aria-hidden="true"></span>
                                <input type="number" placeholder="Documento" name="cedula" autocomplete="off" required>
                            </div>
                            <div class="input">
                                <span class="fa fa-mobile" aria-hidden="true"></span>
                                <input type="number" placeholder="Telefono/whatsapp" name="celular" autocomplete="off" required>
                            </div>
                            <div class="input">
                                <span class="fa fa-street-view" aria-hidden="true"></span>
                                <input type="text" placeholder="Direccion" name="direccion" autocomplete="off" required>
                            </div>
                            <div class="input">
                                <span class="fa fa-key" aria-hidden="true"></span>
                                <input type="password" placeholder="Contraseña" name="contraseña" autocomplete="off" required>
                            </div>
                            <button type="submit" class="btn submit">Registrarse</button>
                        </form>