<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
	header("Location: pagina.php");
}else{
    
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Iniciar Sesion</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
     rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo2.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="Index.html" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="Categoria.php" id="enlace-equipo" class="btn-header">Categorias</a>
                    <a href="Acerca.php" id="enlace-servicio" class="btn-header">Contacto</a>
                </div>
        </header>


    <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

    <div class="main-bg">
        <!-- title -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>Iniciar Sesion</h1>
        <!-- //title -->
        <div class="sub-main-w3">
            <div class="image-style">

            </div>
            <!-- vertical tabs -->
            <div class="vertical-tab">
                <div id="section1" class="section-w3ls">
                    <input type="radio" name="sections" id="option1" checked>
                    <label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Iniciar Sesion</label>
                    <article>
                        <form method="POST" action="logeo.php">
                            <h3 class="legend">Inicia aqui</h3>
                            <div class="input">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                <input type="email" placeholder="Alguien@email.com" name="correo" id="correo" autocomplete="off"  required/>
                            </div>
                            <div class="input">
                                <span class="fa fa-key" aria-hidden="true"></span>
                                <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña" autocomplete="off" required/>
                            </div>
                            <button type="submit" class="btn submit">Iniciar Sesion</button>
                            <a href="#" class="bottom-text-w3ls">Olvidaste tu contraseña?</a>
                        </form>
                    </article>
                </div>
                <div id="section2" class="section-w3ls">
                    <input type="radio" name="sections" id="option2">
                    <label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>Registrarse</label>
                    <article>
                        <form method="POST" action="principal.php">
                            <h3 class="legend">Registrate aqui</h3>
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
                    </article>
                </div>
                <div id="section3" class="section-w3ls">
                    <input type="radio" name="sections" id="option3">
                    <label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Olvidaste tu contraseña?</label>
                    <article>
                        <form action="recuperar.php" method="POST">
                            <h3 class="legend last">Olvidastes tu contraseña</h3>
                            <p class="para-style">Ingrese su dirección de correo electrónico a continuación y le enviaremos un correo electrónico con instrucciones.</p>
                            <p class="para-style-2"><strong>Necesitas ayuda?</strong>Obtenga más información sobre cómo recuperar una <a href="#">Cuenta existente</a></p>
                            <div class="input">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                                <input type="email" placeholder="Email" name="email" required autocomplete="off" />
                            </div>
                            <button type="submit" class="btn submit last-btn">Enviar</button>
                        </form>
                    </article>
                </div>
            </div>
            <!-- //vertical tabs -->
            <div class="clear"></div>
        </div>
        <!-- copyright -->
      <div class="footer">
      <div class="wrap">
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


</body>

</html>
<?php
}
?>
