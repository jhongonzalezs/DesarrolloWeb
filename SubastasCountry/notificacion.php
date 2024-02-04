<!--Validacion para el inicio de session-->
<?php 
include("seguridad.php");
include("conexion.php");
$con=conectar();
session_start();
if (isset($_SESSION['correo'])){
?>
<!DOCTYPE html>
<html lang="en">
<!--En este codigo se diseñara y arreglara todo lo que se basa en la informacion de los responsables de la pagina web -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notificaciones</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
        <style type="text/css">
            .texto-team{
                font-size: 12;
                font-family: all;
            }
            .content-card{
                width: 31%;
                box-shadow: 0 0 10px 0 rgba(0,0,0,.5);
                overflow: hidden;
                height:250px;
}
        </style>
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo2.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <h5>Usuario: <?php echo $_SESSION['Usuarios'] ?></h5><br><!--El Nombre del usuario que inicio session con su cuenta-->
                    <a href="pagina.php" id="enlace-inicio" class="btn-header">Perfil</a>
                    <a href="Acerca.php" id="enlace-contacto" class="btn-header">Contacto</a>
                    <a href="Categoria.php" id="enlace-trabajo" class="btn-header">Categoria</a><!--Redireccionar a Las categorias-->
                    <a href="salir.php" id="enlace-servicio" class="btn-header">Cerrar Session</a><!--Cerrar Session De la Cuenta-->
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Notificaciones</h1>
            <h2>Conoce acerca de tu participacion en las subastas</h2>
        </div>
    </header>
    <?php


$consult=mysqli_query($con, "SELECT * FROM `imagenes`");

if(mysqli_num_rows($consult)>0){

	$result=mysqli_fetch_array($consult);

	$_SESSION['nombre']= $result['nombre'];
    $_SESSION['imagen']= $result['ruta'];
    $_SESSION['descripcion']= $result['descripcion'];
    $_SESSION['inicial']= $result['inicial'];
    $_SESSION['foto']= $result['user_id'];
    $_SESSION['idimagen']= $result['id_imagen'];
    $_SESSION['usuario123']= $result['usuario'];
    $_SESSION['post']= $result['correo'];
}


$mensajes=mysqli_query($con, "SELECT * FROM `mensajes`");

if(mysqli_num_rows($mensajes)>0){

	$mens=mysqli_fetch_array($mensajes);

	$_SESSION['id1']= $mens['id'];
    $_SESSION['idmen']= $mens['id_mensaje'];
    $_SESSION['mensa']= $mens['mensaje'];
    $_SESSION['menjear']= $mens['mensajear'];
    $_SESSION['uus']= $mens['user'];
    $_SESSION['gmail']= $mens['correo'];
}else{
    echo '<br><br><br><p>';
        echo '<div class="textos-work" align="center"><h1>No Tiene Ninguna Notificacion</h1></div>';
echo '</p>
<br><br>';
}

?>
<?php
$idu=$_SESSION['id'];
$posdata=$_SESSION['correo'];
$mensajes=mysqli_query($con, "SELECT mensaje FROM mensajes WHERE user=('$idu') ");
$mensajes2=mysqli_query($con, "SELECT mensajear FROM mensajes WHERE id_mensaje=('$idu') ");
?>
<br>
<br>
<br>

<?php

if($_SESSION['gmail']=$posdata) {
    while ($mensajear=mysqli_fetch_array($mensajes2)) {
echo '<br><br><br><p>
<div class="card">
<div class="content-card">
<div class="texto-team">';
        echo '<div class="textos-work"><h4>'.$mensajear['mensajear'].'</h4></div>';
echo '</p>
</div>
</div>
</div><br><br>';
    }
    while ($mensaje=mysqli_fetch_array($mensajes)) {
echo '<br><br><br><p>
<div class="card">
<div class="content-card">
<div class="texto-team">';
        echo '<div class="textos-work"><h4>'.$mensaje['mensaje'].'</h4></div>';
echo '</p>
</div>
</div>
</div><br><br>';
    }
}else{

if($_SESSION['gmail']=$posdata){
    while ($mensaje=mysqli_fetch_array($mensajes)) {
echo '<br><br><br><p>
<div class="card">
<div class="content-card">
<div class="texto-team">';
        echo '<div class="textos-work"><h4>'.$mensaje['mensaje'].'</h4></div>';
echo '</p>
</div>
</div>
</div><br><br>';
    }

}
}
?>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

        <div class="footer">
      <div class="wrap"><!--Informacion Adicional De la pagina-->
         <div class="footer_grides">
                <div class="footer_grid2" style="padding:0px">
                    <h3>Acerca de nosotros</h3>
                    <p>SubastasCountry.com Se centrará en el modelo de ventas conocido como las subastas o trueques, dando una forma nueva para poder vender o conseguir productos fuera de serie que no podrían conseguir normalmente en el mercado.<br></p>
                </div>
                <div class="footer_grid1">  
                        <h3>Nuestro Contacto</h3>
                            <div class="address">
                            <ul>
                              <li><a href="Acerca.php">Contacto</a></li>
                          </ul>
                        </div>
                      </div>
                <div class="footer_grid3">
                    <h3>Guia del usuario</h3>
                        <div class="f_menu">
                               <ul>
                                    <li><a href="./descarga/Manual de usuario.pdf" download="Manual de usuario">Manual del usuario</a></li>
                               </ul>
                        </div>
                </div>
        <div class="footer_grid4">
            <h3>Siguenos</h3>
                <div class="img_list">
                    <ul>
                         <li><img src="img/facebook.png" alt="" /><a href="https://www.facebook.com/Subastas-Country-111593046901694/?modal=admin_todo_tour">Siguenos en Facebook</a></li>
                    </ul>
                </div>
         </div>
     <div class="clear"></div>
  </div>
         <div class="copy_right">
                <p>© 2019 SubastasCountry. Todos los derechos reservados<a href=""></a> </p>
           </div>
     </div>
 </div>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>
<?php
}else{
	header("Login.php");
}
?>

