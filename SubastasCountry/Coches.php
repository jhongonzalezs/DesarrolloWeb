<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");
$con= conectar();

$chevrolet="SELECT * FROM `imagenes` WHERE categoria=('Chevrolet')";
$chevy=mysqli_query($con,$chevrolet);

$renault="SELECT * FROM `imagenes` WHERE categoria=('Renault')";
$aud=mysqli_query($con,$renault);

$toyota="SELECT * FROM `imagenes` WHERE categoria=('Toyota')";
$toyo=mysqli_query($con,$toyota);

$kia="SELECT * FROM `imagenes` WHERE categoria=('Kia')";
$ki=mysqli_query($con,$kia);

$mazda="SELECT * FROM `imagenes` WHERE categoria=('Mazda')";
$maz=mysqli_query($con,$mazda);

$nissan="SELECT * FROM `imagenes` WHERE categoria=('Nissan') ";
$nissa=mysqli_query($con,$nissan);

$fords="SELECT * FROM `imagenes` WHERE categoria=('Ford') ";
$ford=mysqli_query($con,$fords);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coches</title>
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
            <h1>Coches</h1>
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
                    <li class="filter" data-nombre='Chevrolet'>Chevrolet</li>
                    <li class="filter" data-nombre='Renault'>Renault</li>
                    <li class="filter" data-nombre='Toyota'>Toyota</li>
                    <li class="filter" data-nombre='Kia'>Kia</li>
                    <li class="filter" data-nombre='Mazda'>Mazda</li>
                    <li class="filter" data-nombre='Nissan'>Nissan</li>
                    <li class="filter" data-nombre='Ford'>Ford</li>
                </ul>
            </div>

                <div class="galeria-work">


                  <?php
                while($chev=mysqli_fetch_array($chevy))
                {
                    echo '<div class="cont-work Chevrolet">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$chev['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$chev['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$chev['inicial'].'</p>
                            <p class="line-through">$'.$chev['final'].'</p>
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
                    $_SESSION['ir']=$ruta;
                    $_SESSION['nombre']= $chev['nombre'];
                    $_SESSION['imagen']= $chev['ruta'];
                    $_SESSION['descripcion']= $chev['descripcion'];
                    $_SESSION['inicial']= $chev['inicial'];
                    $_SESSION['final']= $chev['final'];
                    
                }
                ?>

                <?php
                while($au=mysqli_fetch_array($aud))
                {
                    echo '<div class="cont-work Renault">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$au['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$au['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$au['inicial'].'</p>
                            <p class="line-through">$'.$au['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" name"btn">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    
                    $_SESSION['nombre']= $au['nombre'];
                    $_SESSION['imagen']= $au['ruta'];
                    $_SESSION['descripcion']= $au['descripcion'];
                    $_SESSION['inicial']= $au['inicial'];
                    $_SESSION['final']= $au['final'];
                }
                ?>

                <?php
                while($toy=mysqli_fetch_array($toyo))
                {
                
                   echo '<div class="cont-work Toyota">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$toy['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$toy['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$toy['inicial'].'</p>
                            <p class="line-through">$'.$toy['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" name"btn">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    
                    $_SESSION['nombre']= $toy['nombre'];
                    $_SESSION['imagen']= $toy['ruta'];
                    $_SESSION['descripcion']= $toy['descripcion'];
                    $_SESSION['inicial']= $toy['inicial'];
                    $_SESSION['final']= $toy['final'];
                }
                ?>

                <?php
                while($k=mysqli_fetch_array($ki))
                {
                echo '<div class="cont-work Kia">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$k['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$k['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$k['inicial'].'</p>
                            <p class="line-through">$'.$k['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" name"btn">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    
                    $_SESSION['nombre']= $k['nombre'];
                    $_SESSION['imagen']= $k['ruta'];
                    $_SESSION['descripcion']= $k['descripcion'];
                    $_SESSION['inicial']= $k['inicial'];
                    $_SESSION['final']= $k['final'];
                }
              ?>

                <?php
                while($ma=mysqli_fetch_array($maz))
                {
               echo '<div class="cont-work Mazda">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$ma['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$ma['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$ma['inicial'].'</p>
                            <p class="line-through">$'.$ma['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $_SESSION['nombre']= $ma['nombre'];
                    $_SESSION['imagen']= $ma['ruta'];
                    $_SESSION['descripcion']= $ma['descripcion'];
                    $_SESSION['inicial']= $ma['inicial'];
                    $_SESSION['final']= $ma['final'];

                }
                ?>

                <?php
                while($niss=mysqli_fetch_array($nissa))
                {
              echo '<div class="cont-work Nissan">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$niss['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$niss['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$niss['inicial'].'</p>
                            <p class="line-through">$'.$niss['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart" name"btn">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    
                    $_SESSION['nombre']= $niss['nombre'];
                    $_SESSION['imagen']= $niss['ruta'];
                    $_SESSION['descripcion']= $niss['descripcion'];
                    $_SESSION['inicial']= $niss['inicial'];
                    $_SESSION['final']= $niss['final'];
                }
                ?>

                <?php
                while($fo=mysqli_fetch_array($ford))
                {
                    echo '<div class="cont-work Ford">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$fo['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$fo['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$fo['inicial'].'</p>
                            <p class="line-through">$'.$fo['final'].'</p>
                        </div>
                    </div>
                    <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                    <a href="Visualizacion.php" class="link-product-add-cart">Ver</a>
                    </div>
                    </div>           
                    </div>
                    </div>
                    </div>';

                    $_SESSION['nombre']= $fo['nombre'];
                    $_SESSION['imagen']= $fo['ruta'];
                    $_SESSION['descripcion']= $fo['descripcion'];
                    $_SESSION['inicial']= $fo['inicial'];
                    $_SESSION['final']= $fo['final'];
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