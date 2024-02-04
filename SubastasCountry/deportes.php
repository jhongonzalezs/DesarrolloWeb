<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");
$con= conectar();

$boxeo="SELECT * FROM `imagenes` WHERE categoria=('Boxeo') ";
$box=mysqli_query($con,$boxeo);

$natacion="SELECT * FROM `imagenes` WHERE categoria=('Natacion')";
$nadar=mysqli_query($con,$natacion);

$tenis="SELECT * FROM `imagenes` WHERE categoria=('Tenis') ";
$ten=mysqli_query($con,$tenis);

$beisbol="SELECT * FROM `imagenes` WHERE categoria=('Beisbol') ";
$beis=mysqli_query($con,$beisbol);

$baloncesto="SELECT * FROM `imagenes` WHERE categoria=('Baloncesto') ";
$balon=mysqli_query($con,$baloncesto);

$soccer="SELECT * FROM `imagenes` WHERE categoria=('Soccer') ";
$futbol=mysqli_query($con,$soccer);

$americano="SELECT * FROM `imagenes` WHERE categoria=('Americano') ";
$american=mysqli_query($con,$americano);

$voleibol="SELECT * FROM `imagenes` WHERE categoria=('Voleibol') ";
$vole=mysqli_query($con,$voleibol);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportes</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.min.css">
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1f039ebe-7460-401c-a76c-95ccc643b633"></script>
<!-- End of  Zendesk Widget script -->

<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link href="css/styles.css" type="text/css" rel="stylesheet" media="all">

</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header class="head">

        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo2.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <h5>Usuario: <?php echo $_SESSION['Usuarios'] ?></h5><br>
                    <a href="pagina.php" id="enlace-inicio" class="btn-header">Perfil</a>
                    <a href="Categoria.php" id="enlace-equipo" class="btn-header">Categoria</a>
                    <a href="subastar.php" id="enlace-servicio" class="btn-header">Subastar</a>
                    <a href="salir.php" id="enlace-servicio" class="btn-header">Cerrar Session</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Deportes</h1>
            <h2></h2>
        </div>
    </header>
<main>
    <section class="work contenedor" id="trabajo">
               <div class="wrap1">
              <h1>Categorias</h1>
              </div>
             <div class="botones-work">
                <ul>
                    <li class="filter" data-nombre='Boxeo'>Boxeo</li>
                    <li class="filter" data-nombre='Natacion'>Natacion</li>
                    <li class="filter" data-nombre='Tenis'>Tenis</li>
                    <li class="filter" data-nombre='Beisbol'>Beisbol</li>
                    <li class="filter" data-nombre='Baloncesto'>Baloncesto</li>
                    <li class="filter" data-nombre='Futbol'>Futbol Soccer</li>
                    <li class="filter" data-nombre='americano'>Futbol Americano</li>
                    <li class="filter" data-nombre='Voleibol'>Voleibol</li>
                </ul>
            </div>

                <div class="galeria-work">

                    <?php
                while($b=mysqli_fetch_array($box))
                {
                     echo '<div class="cont-work Boxeo">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$b['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$b['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$b['inicial'].'</p>
                            <p class="line-through">$'.$b['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$b;
                    $_SESSION['nombre']= $b['nombre'];
                    $_SESSION['imagen']= $b['ruta'];
                    $_SESSION['descripcion']= $b['descripcion'];
                    $_SESSION['inicial']= $b['inicial'];
                    $_SESSION['final']= $b['final'];
                }
                ?>

                <?php
                while($nad=mysqli_fetch_array($nadar))
                {
                     echo '<div class="cont-work Natacion">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$nad['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$nad['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$nad['inicial'].'</p>
                            <p class="line-through">$'.$nad['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$nad;
                    $_SESSION['nombre']= $nad['nombre'];
                    $_SESSION['imagen']= $nad['ruta'];
                    $_SESSION['descripcion']= $nad['descripcion'];
                    $_SESSION['inicial']= $nad['inicial'];
                    $_SESSION['final']= $nad['final'];
                }
                ?>

                <?php
                while($tel=mysqli_fetch_array($ten))
                {
                     echo '<div class="cont-work Tenis">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$tel['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$tel['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$tel['inicial'].'</p>
                            <p class="line-through">$'.$tel['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$tel;
                    $_SESSION['nombre']= $tel['nombre'];
                    $_SESSION['imagen']= $tel['ruta'];
                    $_SESSION['descripcion']= $tel['descripcion'];
                    $_SESSION['inicial']= $tel['inicial'];
                    $_SESSION['final']= $tel['final'];
                }
                ?>

                <?php
                while($be=mysqli_fetch_array($beis))
                {
                 echo '<div class="cont-work Beisbol">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$be['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$be['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$be['inicial'].'</p>
                            <p class="line-through">$'.$be['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$be;
                    $_SESSION['nombre']= $be['nombre'];
                    $_SESSION['imagen']= $be['ruta'];
                    $_SESSION['descripcion']= $be['descripcion'];
                    $_SESSION['inicial']= $be['inicial'];
                    $_SESSION['final']= $be['final'];
                }
              ?>

                <?php
                while($bal=mysqli_fetch_array($balon))
                {
               echo '<div class="cont-work Baloncesto">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$bal['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$bal['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$bal['inicial'].'</p>
                            <p class="line-through">$'.$bal['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$bal;
                    $_SESSION['nombre']= $bal['nombre'];
                    $_SESSION['imagen']= $bal['ruta'];
                    $_SESSION['descripcion']= $bal['descripcion'];
                    $_SESSION['inicial']= $bal['inicial'];
                    $_SESSION['final']= $bal['final'];
                }
                ?>

                <?php
                while($futb=mysqli_fetch_array($futbol))
                {
                echo '<div class="cont-work Futbol">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$futb['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$futb['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$futb['inicial'].'</p>
                            <p class="line-through">$'.$futb['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$futb;
                    $_SESSION['nombre']= $futb['nombre'];
                    $_SESSION['imagen']= $futb['ruta'];
                    $_SESSION['descripcion']= $futb['descripcion'];
                    $_SESSION['inicial']= $futb['inicial'];
                    $_SESSION['final']= $futb['final'];
                }
                ?>

                <?php
                while($america=mysqli_fetch_array($american))
                {
                     echo '<div class="cont-work Americano">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$america['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$america['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$america['inicial'].'</p>
                            <p class="line-through">$'.$america['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$america;
                    $_SESSION['nombre']= $america['nombre'];
                    $_SESSION['imagen']= $america['ruta'];
                    $_SESSION['descripcion']= $america['descripcion'];
                    $_SESSION['inicial']= $america['inicial'];
                    $_SESSION['final']= $america['final'];
                }
                ?>

                <?php
                while($vol=mysqli_fetch_array($vole))
                {
                    echo '<div class="cont-work Voleibol">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$vol['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$vol['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$vol['inicial'].'</p>
                            <p class="line-through">$'.$vol['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" onclick="visual">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $ruta="visual";
                    $_SESSION['data']=$vol;
                    $_SESSION['nombre']= $vol['nombre'];
                    $_SESSION['imagen']= $vol['ruta'];
                    $_SESSION['descripcion']= $vol['descripcion'];
                    $_SESSION['inicial']= $vol['inicial'];
                    $_SESSION['final']= $vol['final'];
                }
                ?>
            </div>
        </section>
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