<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>

<!DOCTYPE html>
<html lang="en">
<!-- Hi, this is a template free, please suscribe to my chanel
AlexCG Design, Thank you, I hope this template helps you -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Iniciada</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
        <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1f039ebe-7460-401c-a76c-95ccc643b633"></script>
<!-- End of  Zendesk Widget script -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
<link rel="stylesheet" href="css/swiper.min.css">

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
                	<h5>Usuario: <?php echo $_SESSION['Usuarios'] ?> </h5>
                    <a href="Categoria.php" id="enlace-equipo" class="btn-header">Categorias</a>
                    <a href="Acerca.php" id="enlace-contacto" class="btn-header">Contacto</a>
                    <a href="notificacion.php" id="enlace-contacto" class="btn-header">Notificaciones</a>
                    <a href="subastar.php" id="enlace-contacto" class="btn-header">Subastar</a>
                    <a href="salir.php" id="enlace-servicio" class="btn-header">Cerrar Session</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
         <div class="textos">
            <h1>Bienvenidos a Subastas Country</h1>
            <h2></h2>
        </div>
    </header>
    <main>
    <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"><img src="img/misionicono.png"></text></svg>
        <h2>Misión</h2>
        <p>Nuestra misión como proyecto es la formación de un método de ventas por internet innovador y fresco que pueda darles mayores oportunidades a vendedores y compradores de vender y conseguir productos fuera del alcance de las ventas regulares, para ello usaremos el método de ventas por subastas.</p>
        <p>
      </div>

      <div class="col-lg-4"></div>
       
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="0" height="0" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="40%" y="40%" fill="#777" dy=".3em"><img src="img/vicion.png"></text></svg>
        <h2>Visión</h2>
        <p>La visión de nuestro proyecto es lograr llegar a desarrollar nuestra misión hasta lograr convertirnos en una de las formas de ventas más populares dentro del mundo online y presencial, volviéndonos así en una macro-empresa de alcance nacional e internacional.</p>
        <p>
      </div>
    </div>
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Acerca de subastas</h2>
        <p class="lead">La subasta o remate, en la actualidad, es la venta pública de bienes que se hace al mejor postor. Es habitual que la subasta se realice con la intervención de alguna autoridad, como puede ser un juez. Se conoce como subasta, por otra parte, a la adjudicación de un contrato que se hace de la misma forma (al mejor postor). En este caso, su propósito suele ser la concesión de un servicio público o la ejecución de una obra pública.
        <br>
        <br>    
        La lógica de la subasta supone la fijación de un precio base que, a partir de la puja entre los interesados, comienza a subir. El producto subastado, finalmente, será entregado a quien ofrezca la mayor suma de dinero.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="20" height="50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><img src="img/Subastas.jpg"></svg>
      </div>
    </div>

    <hr class="featurette-divider">
  </div>


       <br>
       <br>
    </main>

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


    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>
<?php
}else{
	header("Location: Login.php");
}

?>
