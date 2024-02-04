<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){        

?>
<?php
include("conexion.php");
$con= conectar();

$sql="SELECT * FROM `imagenes` WHERE categoria=('Camisas')";
$resultado=mysqli_query($con,$sql);

$blusas="SELECT * FROM `imagenes` WHERE categoria=('Blusas')";
$blusa=mysqli_query($con,$blusas);

$jeans="SELECT * FROM `imagenes` WHERE categoria=('Jeans')";
$jean=mysqli_query($con,$jeans);

$chaquetas="SELECT * FROM `imagenes` WHERE categoria=('Chaquetas')";
$chaqueta=mysqli_query($con,$chaquetas);

$pantalones="SELECT * FROM `imagenes` WHERE categoria=('Pantalones')";
$pantalon=mysqli_query($con,$pantalones);

$zapatos="SELECT * FROM `imagenes` WHERE categoria=('Zapatos')";
$zapato=mysqli_query($con,$zapatos);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Textiles</title>
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
            <h1>Textiles</h1>
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
                    <li class="filter" data-nombre='Textiles'>Camisas</li>
                    <li class="filter" data-nombre='Blusas'>Blusas</li>
                    <li class="filter" data-nombre='Jeans'>Jeans</li>
                    <li class="filter" data-nombre='Pantalones'>Pantalones</li>
                    <li class="filter" data-nombre='Chaquetas'>Chaquetas</li>
                    <li class="filter" data-nombre='Zapatos'>Zapatos</li>
                </ul>
            </div>
            <div class="galeria-work">

                

                <?php
                while($data=mysqli_fetch_array($resultado))
                {
                    echo '<div class="cont-work Textiles">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$data['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$data['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$data['inicial'].'</p>
                            <p class="line-through">$'.$data['final'].'</p>
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
                    $_SESSION['data']=$data;
                    $_SESSION['nombre']= $data['nombre'];
                    $_SESSION['imagen']= $data['ruta'];
                    $_SESSION['descripcion']= $data['descripcion'];
                    $_SESSION['inicial']= $data['inicial'];
                    $_SESSION['final']= $data['final'];
                }
                ?>

                <?php
                while($blus=mysqli_fetch_array($blusa))
                {
                    echo '<div class="cont-work Blusas">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$blus['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$blus['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$blus['inicial'].'</p>
                            <p class="line-through">$'.$blus['final'].'</p>
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
                    $_SESSION['nombre']= $blus['nombre'];
                    $_SESSION['imagen']= $blus['ruta'];
                    $_SESSION['descripcion']= $blus['descripcion'];
                    $_SESSION['inicial']= $blus['inicial'];
                    $_SESSION['final']= $blus['final'];
                }
                ?>

                <?php
                while($jen=mysqli_fetch_array($jean))
                {
                   echo '<div class="cont-work Jeans">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$jen['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$jen['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$jen['inicial'].'</p>
                            <p class="line-through">$'.$jen['final'].'</p>
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
                    $_SESSION['nombre']= $jen['nombre'];
                    $_SESSION['imagen']= $jen['ruta'];
                    $_SESSION['descripcion']= $jen['descripcion'];
                    $_SESSION['inicial']= $jen['inicial'];
                    $_SESSION['final']= $jen['final'];
                }
                ?>

                <?php
            	while($pan=mysqli_fetch_array($pantalon))
                {
                echo '<div class="cont-work Pantalones">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$pan['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$pan['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$pan['inicial'].'</p>
                            <p class="line-through">$'.$pan['final'].'</p>
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
                    $_SESSION['nombre']= $pan['nombre'];
                    $_SESSION['imagen']= $pan['ruta'];
                    $_SESSION['descripcion']= $pan['descripcion'];
                    $_SESSION['inicial']= $pan['inicial'];
                    $_SESSION['final']= $pan['final'];
                }
              ?>

                <?php
                while($chaq=mysqli_fetch_array($chaqueta))
                {
              echo '<div class="cont-work Chaquetas">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$chaq['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$chaq['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$chaq['inicial'].'</p>
                            <p class="line-through">$'.$chaq['final'].'</p>
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
                    $_SESSION['nombre']= $chaq['nombre'];
                    $_SESSION['imagen']= $chaq['ruta'];
                    $_SESSION['descripcion']= $chaq['descripcion'];
                    $_SESSION['inicial']= $chaq['inicial'];
                    $_SESSION['final']= $chaq['final'];
                }
                ?>

                <?php
                while($zapat=mysqli_fetch_array($zapato))
                {
               echo '<div class="cont-work Zapatos">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$zapat['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$zapat['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$zapat['inicial'].'</p>
                            <p class="line-through">$'.$zapat['final'].'</p>
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
                    $_SESSION['data']=$zapat;
                    $_SESSION['nombre']= $zapat['nombre'];
                    $_SESSION['imagen']= $zapat['ruta'];
                    $_SESSION['descripcion']= $zapat['descripcion'];
                    $_SESSION['inicial']= $zapat['inicial'];
                    $_SESSION['final']= $zapat['final'];
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