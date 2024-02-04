<!--Validacion para el inicio de session-->
<?php 
include("seguridad.php");
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
    <title>Acerca de nosotros</title><!--nombre de la pagina web-->
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
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
                    <a href="pagina.php" id="enlace-inicio" class="btn-header">Perfil</a><!--Redireccionar al perfil/inicio de la pagina-->
                    <a href="Categoria.php" id="enlace-trabajo" class="btn-header">Categoria</a><!--Redireccionar a Las categorias-->
                    <a href="salir.php" id="enlace-servicio" class="btn-header">Cerrar Session</a><!--Cerrar Session De la Cuenta-->
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Nuestro Equipo</h1><!--Presentacion de los desarrolladores de la pagina de Subastas-->
            <h2>Conoce a la gente asombrosa y creativa</h2>
        </div>
    </header>
    <main>

         <section class="team contenedor" id="equipo">
            <!--<h3>Nuestro equipo</h3>
            <p class="after">Conoce a la gente asombrosa y creativa</p>-->
            <br>
            <br>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/jrojas.jpeg" alt="">
                    </div><!--Datos Personales de los Diseñadores de la pagina-->
                    <div class="texto-team">
                        <h4>Jesus David Contreras</h4>
                        <p> jesus.crojas@hotmail.com<br>
                         3016351392</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/perfil.jpg" alt="">
                    </div>
                    <div class="texto-team">
                       <h4>Jhon Gonzalez Sanchez</h4>
                        <p>jjgonzalez832@misena.edu.co<br>
                         3008788730</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/Brandon.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Brandon Orozco Iglesias</h4>
                        <p>bsorozco7@misena.edu.co<br>
                         3015182851</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="team contenedor" id="equipo">
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/perfil.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Jesus David Martinez</h4>
                        <p>prodormun041@gmail.com<br>
                           3017283107</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/perfil.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Damian Velez Amaya</h4>                        
                        <p>davelez223@misena.edu.co<br>
                           3186244577</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acerca de nosotros</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
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
                    <a href="index.html" id="enlace-inicio" class="btn-header">Inicio</a><!--Redireccionar a Las Inicio-->
                    <a href="Categoria.php" id="enlace-trabajo" class="btn-header">Categoria</a><!--Redireccionar a Las categorias-->
                    <a href="Login.php" id="enlace-servicio" class="btn-header">Iniciar Sesion</a><!--Iniciar session con su usuario-->
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Nuestro Equipo</h1>
            <h2>Conoce a la gente asombrosa y creativa</h2>
        </div>
    </header>
    <main>

         <section class="team contenedor" id="equipo">
            <!--<h3>Nuestro equipo</h3>
            <p class="after">Conoce a la gente asombrosa y creativa</p>-->
            <br>
            <br>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/jrojas.jpeg" alt="">
                    </div><!--Datos Personales de los Diseñadores de la pagina-->
                    <div class="texto-team">
                        <h4>Jesus David Contreras</h4>
                        <p> jesus.crojas@hotmail.com<br>
                         3016351392</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/perfil.jpg" alt="">
                    </div>
                    <div class="texto-team">
                       <h4>Jhon Gonzalez Sanchez</h4>
                        <p>jjgonzalez832@misena.edu.co<br>
                         3008788730</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/Brandon.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Brandon Orozco Iglesias</h4>
                        <p>bsorozco7@misena.edu.co<br>
                         3015182851</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="team contenedor" id="equipo">
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/perfil.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Jesus David Martinez</h4>
                        <p>prodormun041@gmail.com<br>
                           3017283107</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/perfil.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>Damian Velez Amaya</h4>                        
                        <p>davelez223@misena.edu.co<br>
                           3186244577</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <br>
    <br>
        <div class="footer">
      <div class="wrap">
         <div class="footer_grides"><!--Informacion De la pagina-->
                <div class="footer_grid2" style="padding:0px">
                    <h3>Acerca de nosotros</h3>
                    <p>SubastasCountry.com Se centrará en el modelo de ventas conocido como las subastas o trueques, dando una forma nueva para poder vender o conseguir productos fuera de serie que no podrían conseguir normalmente en el mercado.<br></p>
                </div>
                <div class="footer_grid1">  
                        <h3>Nuestro Contacto</h3>
                            <div class="address">
                            <ul>
                              <li><a href="Acerca.html">Contacto</a></li>
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
<!--Codigo JavaScript-->
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>
<!--Cierre de la validacion-->
<?php
}
?>