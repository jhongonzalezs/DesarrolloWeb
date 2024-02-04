<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");
$con= conectar();

$neveras="SELECT * FROM `imagenes` WHERE categoria=('Neveras') ";
$nev=mysqli_query($con,$neveras);

$cafeteras="SELECT * FROM `imagenes` WHERE categoria=('Cafeteras') ";
$cafe=mysqli_query($con,$cafeteras);

$climatizacion="SELECT * FROM `imagenes` WHERE categoria=('Climatizacion') ";
$clima=mysqli_query($con,$climatizacion);

$hornos="SELECT * FROM `imagenes` WHERE categoria=('Hornos') ";
$horn=mysqli_query($con,$hornos);

$lavadoras="SELECT * FROM `imagenes` WHERE categoria=('Lavadoras') ";
$lav=mysqli_query($con,$lavadoras);

$estufas="SELECT * FROM `imagenes` WHERE categoria=('Estufas') ";
$estuf=mysqli_query($con,$estufas);

$televisores="SELECT * FROM `imagenes` WHERE categoria=('Televisores') ";
$tv=mysqli_query($con,$televisores);

$dvd="SELECT * FROM `imagenes` WHERE categoria=('DVD') ";
$dv=mysqli_query($con,$dvd);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electrodomesticos</title>
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
            <h1>Electrodomesticos</h1>
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
                    <li class="filter" data-nombre='Neveras'>Neveras</li>
                    <li class="filter" data-nombre='Cafeteras'>Cafeteras</li>
                    <li class="filter" data-nombre='Climatizacion'>Climatizacion</li>
                    <li class="filter" data-nombre='Hornos'>Hornos</li>
                    <li class="filter" data-nombre='Lavadoras'>Lavadoras</li>
                    <li class="filter" data-nombre='Estufas'>Estufas</li>
                    <li class="filter" data-nombre='Televisores'>Televisores</li>
                    <li class="filter" data-nombre='DVD'>Teatro En Casa</li>
                </ul>
            </div>

            <div class="galeria-work">
                <?php
                while($neve=mysqli_fetch_array($nev))
                {
                     echo '<div class="cont-work Neveras">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$neve['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$neve['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$neve['inicial'].'</p>
                            <p class="line-through">$'.$neve['final'].'</p>
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
                    $_SESSION['data']=$neve;
                    $_SESSION['nombre']= $neve['nombre'];
                    $_SESSION['imagen']= $neve['ruta'];
                    $_SESSION['descripcion']= $neve['descripcion'];
                    $_SESSION['inicial']= $neve['inicial'];
                    $_SESSION['final']= $neve['final'];
                }
                ?>

                <?php
                while($caf=mysqli_fetch_array($cafe))
                {
                     echo '<div class="cont-work Cafeteras">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$caf['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$caf['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$caf['inicial'].'</p>
                            <p class="line-through">$'.$caf['final'].'</p>
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
                    $_SESSION['data']=$caf;
                    $_SESSION['nombre']= $caf['nombre'];
                    $_SESSION['imagen']= $caf['ruta'];
                    $_SESSION['descripcion']= $caf['descripcion'];
                    $_SESSION['inicial']= $caf['inicial'];
                    $_SESSION['final']= $caf['final'];
                }
                ?>

                <?php
                while($clim=mysqli_fetch_array($clima))
                {
                     echo '<div class="cont-work Climatizacion">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$clim['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$clim['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$clim['inicial'].'</p>
                            <p class="line-through">$'.$clim['final'].'</p>
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
                    $_SESSION['data']=$clim;
                    $_SESSION['nombre']= $clim['nombre'];
                    $_SESSION['imagen']= $clim['ruta'];
                    $_SESSION['descripcion']= $clim['descripcion'];
                    $_SESSION['inicial']= $clim['inicial'];
                    $_SESSION['final']= $clim['final'];
                }
                ?>

                <?php
                while($hor=mysqli_fetch_array($horn))
                {
                 echo '<div class="cont-work Hornos">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$hor['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$hor['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$hor['inicial'].'</p>
                            <p class="line-through">$'.$hor['final'].'</p>
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
                    $_SESSION['data']=$hor;
                    $_SESSION['nombre']= $hor['nombre'];
                    $_SESSION['imagen']= $hor['ruta'];
                    $_SESSION['descripcion']= $hor['descripcion'];
                    $_SESSION['inicial']= $hor['inicial'];
                    $_SESSION['final']= $hor['final'];
                }
              ?>

                <?php
                while($lava=mysqli_fetch_array($lav))
                {
                echo '<div class="cont-work Lavadoras">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$lava['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$lava['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$lava['inicial'].'</p>
                            <p class="line-through">$'.$lava['final'].'</p>
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
                    $_SESSION['data']=$lava;
                    $_SESSION['nombre']= $lava['nombre'];
                    $_SESSION['imagen']= $lava['ruta'];
                    $_SESSION['descripcion']= $lava['descripcion'];
                    $_SESSION['inicial']= $lava['inicial'];
                    $_SESSION['final']= $lava['final'];
                }
                ?>

                <?php
                while($est=mysqli_fetch_array($estuf))
                {
                echo '<div class="cont-work Estufas">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$est['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$est['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$est['inicial'].'</p>
                            <p class="line-through">$'.$est['final'].'</p>
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
                    $_SESSION['data']=$est;
                    $_SESSION['nombre']= $est['nombre'];
                    $_SESSION['imagen']= $est['ruta'];
                    $_SESSION['descripcion']= $est['descripcion'];
                    $_SESSION['inicial']= $est['inicial'];
                    $_SESSION['final']= $est['final'];
                }
                ?>

                <?php
                while($tele=mysqli_fetch_array($tv))
                {
                echo '<div class="cont-work Televisores">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$tele['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$tele['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$tele['inicial'].'</p>
                            <p class="line-through">$'.$tele['final'].'</p>
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
                    $_SESSION['data']=$tele;
                    $_SESSION['nombre']= $tele['nombre'];
                    $_SESSION['imagen']= $tele['ruta'];
                    $_SESSION['descripcion']= $tele['descripcion'];
                    $_SESSION['inicial']= $tele['inicial'];
                    $_SESSION['final']= $tele['final'];
                }
                ?>

                <?php
                while($d=mysqli_fetch_array($dv))
                {
                echo '<div class="cont-work DVD">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$d['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$d['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$d['inicial'].'</p>
                            <p class="line-through">$'.$d['final'].'</p>
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
                    $_SESSION['data']=$d;
                    $_SESSION['nombre']= $d['nombre'];
                    $_SESSION['imagen']= $d['ruta'];
                    $_SESSION['descripcion']= $d['descripcion'];
                    $_SESSION['inicial']= $d['inicial'];
                    $_SESSION['final']= $d['final'];
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