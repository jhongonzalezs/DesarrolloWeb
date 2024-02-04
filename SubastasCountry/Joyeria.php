<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");
$con= conectar();

$collares="SELECT * FROM `imagenes` WHERE categoria=('Collares') ";
$collar=mysqli_query($con,$collares);

$relojes="SELECT * FROM `imagenes` WHERE categoria=('Relojes') ";
$reloj=mysqli_query($con,$relojes);

$pulseras="SELECT * FROM `imagenes` WHERE categoria=('Anillos') ";
$pulsera=mysqli_query($con,$pulseras);

$anillos="SELECT * FROM `imagenes` WHERE categoria=('Pulseras') ";
$anillo=mysqli_query($con,$anillos);

$aretes="SELECT * FROM `imagenes` WHERE categoria=('Aretes') ";
$arete=mysqli_query($con,$aretes);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Joyeria</title>
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
            <h1>Joyeria</h1>
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
                    <li class="filter" data-nombre='Collares'>Collares</li>
                    <li class="filter" data-nombre='Relojes'>Relojes</li>
                    <li class="filter" data-nombre='Pulseras'>Pulseras</li>
                    <li class="filter" data-nombre='Anillos'>Anillos</li>
                    <li class="filter" data-nombre='Aretes'>Aretes</li>
                </ul>
            </div>

            <div class="galeria-work">


                <?php
                while($coll=mysqli_fetch_array($collar))
                {
                     echo '<div class="cont-work Collares">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$coll['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$coll['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$coll['inicial'].'</p>
                            <p class="line-through">$'.$coll['final'].'</p>
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
                    $_SESSION['data']=$coll;
                    $_SESSION['nombre']= $coll['nombre'];
                    $_SESSION['imagen']= $coll['ruta'];
                    $_SESSION['descripcion']= $coll['descripcion'];
                    $_SESSION['inicial']= $coll['inicial'];
                    $_SESSION['final']= $coll['final'];
                }
                ?>

                <?php
                while($rel=mysqli_fetch_array($reloj))
                {
                     echo '<div class="cont-work Relojes">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$rel['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$rel['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$rel['inicial'].'</p>
                            <p class="line-through">$'.$rel['final'].'</p>
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
                    $_SESSION['data']=$rel;
                    $_SESSION['nombre']= $rel['nombre'];
                    $_SESSION['imagen']= $rel['ruta'];
                    $_SESSION['descripcion']= $rel['descripcion'];
                    $_SESSION['inicial']= $rel['inicial'];
                    $_SESSION['final']= $rel['final'];
                }
                ?>

                <?php
                while($puls=mysqli_fetch_array($pulsera))
                {
                     echo '<div class="cont-work Pulseras">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$puls['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$puls['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$puls['inicial'].'</p>
                            <p class="line-through">$'.$puls['final'].'</p>
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
                    $_SESSION['data']=$puls;
                    $_SESSION['nombre']= $puls['nombre'];
                    $_SESSION['imagen']= $puls['ruta'];
                    $_SESSION['descripcion']= $puls['descripcion'];
                    $_SESSION['inicial']= $puls['inicial'];
                    $_SESSION['final']= $puls['final'];
                }
                ?>

                <?php
                while($anill=mysqli_fetch_array($anillo))
                {
                 echo '<div class="cont-work Anillos">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$anill['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$anill['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$anill['inicial'].'</p>
                            <p class="line-through">$'.$anill['final'].'</p>
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
                    $_SESSION['data']=$anill;
                    $_SESSION['nombre']= $anill['nombre'];
                    $_SESSION['imagen']= $anill['ruta'];
                    $_SESSION['descripcion']= $anill['descripcion'];
                    $_SESSION['inicial']= $anill['inicial'];
                    $_SESSION['final']= $anill['final'];
                }
              ?>

                <?php
                while($aret=mysqli_fetch_array($arete))
                {
                echo '<div class="cont-work Aretes">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$aret['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$aret['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$aret['inicial'].'</p>
                            <p class="line-through">$'.$aret['final'].'</p>
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
                    $_SESSION['data']=$aret;
                    $_SESSION['nombre']= $aret['nombre'];
                    $_SESSION['imagen']= $aret['ruta'];
                    $_SESSION['descripcion']= $aret['descripcion'];
                    $_SESSION['inicial']= $aret['inicial'];
                    $_SESSION['final']= $aret['final'];
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