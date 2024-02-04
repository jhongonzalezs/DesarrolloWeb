<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");
$con= conectar();

$lenovo="SELECT * FROM `imagenes` WHERE categoria=('Lenovo') ";
$leno=mysqli_query($con,$lenovo);

$hps="SELECT * FROM `imagenes` WHERE categoria=('HP') ";
$hp=mysqli_query($con,$hps);

$dell="SELECT * FROM `imagenes` WHERE categoria=('Dell') ";
$del=mysqli_query($con,$dell);

$acer="SELECT * FROM `imagenes` WHERE categoria=('Acer') ";
$ace=mysqli_query($con,$acer);

$toshiba="SELECT * FROM `imagenes` WHERE categoria=('Toshiba') ";
$tos=mysqli_query($con,$toshiba);

$apple="SELECT * FROM `imagenes` WHERE categoria=('Macbook') ";
$app=mysqli_query($con,$apple);

$asus="SELECT * FROM `imagenes` WHERE categoria=('Asus') ";
$asu=mysqli_query($con,$asus);

$samsung="SELECT * FROM `imagenes` WHERE categoria=('Samsung') ";
$sams=mysqli_query($con,$samsung);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computador</title>
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
            <h1>Computador</h1>
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
                    <li class="filter" data-nombre='Lenovo'>Lenovo</li>
                    <li class="filter" data-nombre='HP'>HP</li>
                    <li class="filter" data-nombre='Dell'>Dell</li>
                    <li class="filter" data-nombre='Acer'>Acer</li>
                    <li class="filter" data-nombre='Toshiba'>Toshiba</li>
                    <li class="filter" data-nombre='Apple'>Apple</li>
                    <li class="filter" data-nombre='Asus'>Asus</li>
                    <li class="filter" data-nombre='Samsung'>Samsung</li>
                </ul>
            </div>

                <div class="galeria-work">

                    <?php
                while($len=mysqli_fetch_array($leno))
                {
                     echo '<div class="cont-work Lenovo">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$len['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$len['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$len['inicial'].'</p>
                            <p class="line-through">$'.$len['final'].'</p>
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
                    $_SESSION['data']=$len;
                    $_SESSION['nombre']= $len['nombre'];
                    $_SESSION['imagen']= $len['ruta'];
                    $_SESSION['descripcion']= $len['descripcion'];
                    $_SESSION['inicial']= $len['inicial'];
                    $_SESSION['final']= $len['final'];
                }
                ?>

                <?php
                while($h=mysqli_fetch_array($hp))
                {
                     echo '<div class="cont-work HP">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$h['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$h['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$h['inicial'].'</p>
                            <p class="line-through">$'.$h['final'].'</p>
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
                    $_SESSION['data']=$h;
                    $_SESSION['nombre']= $h['nombre'];
                    $_SESSION['imagen']= $h['ruta'];
                    $_SESSION['descripcion']= $h['descripcion'];
                    $_SESSION['inicial']= $h['inicial'];
                    $_SESSION['final']= $h['final'];
                }
                ?>

                <?php
                while($de=mysqli_fetch_array($del))
                {
                     echo '<div class="cont-work Dell">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$de['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$de['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$de['inicial'].'</p>
                            <p class="line-through">$'.$de['final'].'</p>
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
                    $_SESSION['data']=$de;
                    $_SESSION['nombre']= $de['nombre'];
                    $_SESSION['imagen']= $de['ruta'];
                    $_SESSION['descripcion']= $de['descripcion'];
                    $_SESSION['inicial']= $de['inicial'];
                    $_SESSION['final']= $de['final'];
                }
                ?>

                <?php
                while($ac=mysqli_fetch_array($ace))
                {
                 echo '<div class="cont-work Acer">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$ac['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$ac['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$ac['inicial'].'</p>
                            <p class="line-through">$'.$ac['final'].'</p>
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
                    $_SESSION['data']=$ac;
                    $_SESSION['nombre']= $ac['nombre'];
                    $_SESSION['imagen']= $ac['ruta'];
                    $_SESSION['descripcion']= $ac['descripcion'];
                    $_SESSION['inicial']= $ac['inicial'];
                    $_SESSION['final']= $ac['final'];
                }
              ?>

                <?php
                while($to=mysqli_fetch_array($tos))
                {
                echo '<div class="cont-work Toshiba">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$to['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$to['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$to['inicial'].'</p>
                            <p class="line-through">$'.$to['final'].'</p>
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
                    $_SESSION['data']=$to;
                    $_SESSION['nombre']= $to['nombre'];
                    $_SESSION['imagen']= $to['ruta'];
                    $_SESSION['descripcion']= $to['descripcion'];
                    $_SESSION['inicial']= $to['inicial'];
                    $_SESSION['final']= $to['final'];
                }
                ?>

                <?php
                while($ap=mysqli_fetch_array($app))
                {
                echo '<div class="cont-work Apple">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$ap['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$ap['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$ap['inicial'].'</p>
                            <p class="line-through">$'.$ap['final'].'</p>
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
                    $_SESSION['data']=$ap;
                    $_SESSION['nombre']= $ap['nombre'];
                    $_SESSION['imagen']= $ap['ruta'];
                    $_SESSION['descripcion']= $ap['descripcion'];
                    $_SESSION['inicial']= $ap['inicial'];
                    $_SESSION['final']= $ap['final'];
                }
                ?>

                <?php
                while($as=mysqli_fetch_array($asu))
                {
                     echo '<div class="cont-work Asus">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$as['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$as['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$as['inicial'].'</p>
                            <p class="line-through">$'.$as['final'].'</p>
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
                    $_SESSION['data']=$as;
                    $_SESSION['nombre']= $as['nombre'];
                    $_SESSION['imagen']= $as['ruta'];
                    $_SESSION['descripcion']= $as['descripcion'];
                    $_SESSION['inicial']= $as['inicial'];
                    $_SESSION['final']= $as['final'];
                }
                ?>

                <?php
                while($sam=mysqli_fetch_array($sams))
                {
                    echo '<div class="cont-work Samsung">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$sam['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$sam['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$sam['inicial'].'</p>
                            <p class="line-through">$'.$sam['final'].'</p>
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
                    $_SESSION['data']=$sam;
                    $_SESSION['nombre']= $sam['nombre'];
                    $_SESSION['imagen']= $sam['ruta'];
                    $_SESSION['descripcion']= $sam['descripcion'];
                    $_SESSION['inicial']= $sam['inicial'];
                    $_SESSION['final']= $sam['final'];
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