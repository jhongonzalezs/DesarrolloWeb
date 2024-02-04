<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");
$con= conectar();

$apple="SELECT * FROM `imagenes` WHERE categoria=('Apple') ";
$mac=mysqli_query($con,$apple);

$samsung="SELECT * FROM `imagenes` WHERE categoria=('Moviles Samsung') ";
$sams=mysqli_query($con,$samsung);

$huawei="SELECT * FROM `imagenes` WHERE categoria=('Huawei') ";
$hua=mysqli_query($con,$huawei);

$motorola="SELECT * FROM `imagenes` WHERE categoria=('Motorola') ";
$moto=mysqli_query($con,$motorola);

$sony="SELECT * FROM `imagenes` WHERE categoria=('Sony') ";
$son=mysqli_query($con,$sony);

$nokia="SELECT * FROM `imagenes` WHERE categoria=('Nokia') ";
$nok=mysqli_query($con,$nokia);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celulares</title>
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
            <h1>Celulares</h1>
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
                    <li class="filter" data-nombre='Apple'>Apple</li>
                    <li class="filter" data-nombre='Samsung'>Samsung</li>                  
                    <li class="filter" data-nombre='Huawei'>Huawei</li>
                    <li class="filter" data-nombre='Motorola'>Motorola</li>
                    <li class="filter" data-nombre='Sony'>Sony</li>
                    <li class="filter" data-nombre='Nokia'>Nokia</li>
                </ul>
            </div>

            <div class="galeria-work">


                 <?php
                while($app=mysqli_fetch_array($mac))
                {
                     echo '<div class="cont-work Apple">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$app['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$app['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$app['inicial'].'</p>
                            <p class="line-through">$'.$app['final'].'</p>
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
                    $_SESSION['data']=$app;
                    $_SESSION['nombre']= $app['nombre'];
                    $_SESSION['imagen']= $app['ruta'];
                    $_SESSION['descripcion']= $app['descripcion'];
                    $_SESSION['inicial']= $app['inicial'];
                    $_SESSION['final']= $app['final'];
                }
                
                ?>

                <?php
                while($samsu=mysqli_fetch_array($sams))
                {
                     echo '<div class="cont-work Samsung">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$samsu['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$samsu['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$samsu['inicial'].'</p>
                            <p class="line-through">$'.$samsu['final'].'</p>
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
                    $_SESSION['data']=$samsu;
                    $_SESSION['nombre']= $samsu['nombre'];
                    $_SESSION['imagen']= $samsu['ruta'];
                    $_SESSION['descripcion']= $samsu['descripcion'];
                    $_SESSION['inicial']= $samsu['inicial'];
                    $_SESSION['final']= $samsu['final'];
                }
                
                ?>

                <?php
                while($hu=mysqli_fetch_array($hua))
                {
                     echo '<div class="cont-work Huawei">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$hu['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$hu['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$hu['inicial'].'</p>
                            <p class="line-through">$'.$hu['final'].'</p>
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
                    $_SESSION['data']=$hu;
                    $_SESSION['nombre']= $hu['nombre'];
                    $_SESSION['imagen']= $hu['ruta'];
                    $_SESSION['descripcion']= $hu['descripcion'];
                    $_SESSION['inicial']= $hu['inicial'];
                    $_SESSION['final']= $hu['final'];
                }
                ?>

                <?php
                while($motor=mysqli_fetch_array($moto))
                {
                     echo '<div class="cont-work Motorola">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$motor['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$motor['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$motor['inicial'].'</p>
                            <p class="line-through">$'.$motor['final'].'</p>
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
                    $_SESSION['data']=$motor;
                    $_SESSION['nombre']= $motor['nombre'];
                    $_SESSION['imagen']= $motor['ruta'];
                    $_SESSION['descripcion']= $motor['descripcion'];
                    $_SESSION['inicial']= $motor['inicial'];
                    $_SESSION['final']= $motor['final'];
                }
                
                ?>
                <?php
                while($sn=mysqli_fetch_array($son))
                {
                echo '<div class="cont-work Sony">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$sn['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$sn['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$sn['inicial'].'</p>
                            <p class="line-through">$'.$sn['final'].'</p>
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
                    $_SESSION['data']=$sn;
                    $_SESSION['nombre']= $sn['nombre'];
                    $_SESSION['imagen']= $sn['ruta'];
                    $_SESSION['descripcion']= $sn['descripcion'];
                    $_SESSION['inicial']= $sn['inicial'];
                    $_SESSION['final']= $sn['final'];
                }
                ?>

                <?php
                while($nk=mysqli_fetch_array($nok))
                {
                echo '<div class="cont-work Nokia">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$nk['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$nk['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$nk['inicial'].'</p>
                            <p class="line-through">$'.$nk['final'].'</p>
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
                    $_SESSION['data']=$nk;
                    $_SESSION['nombre']= $nk['nombre'];
                    $_SESSION['imagen']= $nk['ruta'];
                    $_SESSION['descripcion']= $nk['descripcion'];
                    $_SESSION['inicial']= $nk['inicial'];
                    $_SESSION['final']= $nk['final'];
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
