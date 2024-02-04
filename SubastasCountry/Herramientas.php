<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");
$con= conectar();

$destornilladores="SELECT * FROM `imagenes` WHERE categoria=('Destornilladores')";
$dest=mysqli_query($con,$destornilladores);

$tornillos="SELECT * FROM `imagenes` WHERE categoria=('Tornillos')";
$tor=mysqli_query($con,$tornillos);

$remachadora="SELECT * FROM `imagenes` WHERE categoria=('Remachadora') ";
$rem=mysqli_query($con,$remachadora);

$pala="SELECT * FROM `imagenes` WHERE categoria=('Pala') ";
$pal=mysqli_query($con,$pala);

$serruchos="SELECT * FROM `imagenes` WHERE categoria=('Serruchos') ";
$serruc=mysqli_query($con,$serruchos);

$martillos="SELECT * FROM `imagenes` WHERE categoria=('Martillos') ";
$marti=mysqli_query($con,$martillos);

$llaves="SELECT * FROM `imagenes` WHERE categoria=('Llaves') ";
$llav=mysqli_query($con,$llaves);

$equipo="SELECT * FROM `imagenes` WHERE categoria=('Equipo') ";
$equip=mysqli_query($con,$equipo);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herramientas</title>
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
            <h1>Herramientas</h1>
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
                    <li class="filter" data-nombre='Destornilladores'>Destornilladores</li>
                    <li class="filter" data-nombre='Tornillos'>Tornillos</li>                  
                    <li class="filter" data-nombre='Remachadora'>Remachadora</li>
                    <li class="filter" data-nombre='Pala'>Pala</li>
                    <li class="filter" data-nombre='Serruchos'>Serrucho</li>
                    <li class="filter" data-nombre='Martillos'>Martillos</li>
                    <li class="filter" data-nombre='Llaves'>Llaves</li>
                    <li class="filter" data-nombre='Equipo'>Equipo De Proteccion</li>
                </ul>
            </div>

                <div class="galeria-work">

                <?php
                while($des=mysqli_fetch_array($dest))
                {
                    echo '<div class="cont-work Destornilladores">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$des['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$des['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$des['inicial'].'</p>
                            <p class="line-through">$'.$des['final'].'</p>
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
                    $_SESSION['data']=$des;
                    $_SESSION['nombre']= $des['nombre'];
                    $_SESSION['imagen']= $des['ruta'];
                    $_SESSION['descripcion']= $des['descripcion'];
                    $_SESSION['inicial']= $des['inicial'];
                    $_SESSION['final']= $des['final'];
                }
                ?>

                <?php
                while($torn=mysqli_fetch_array($tor))
                {
                     echo '<div class="cont-work Tornillos">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$torn['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$torn['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$torn['inicial'].'</p>
                            <p class="line-through">$'.$torn['final'].'</p>
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
                    $_SESSION['data']=$torn;
                    $_SESSION['nombre']= $torn['nombre'];
                    $_SESSION['imagen']= $torn['ruta'];
                    $_SESSION['descripcion']= $torn['descripcion'];
                    $_SESSION['inicial']= $torn['inicial'];
                    $_SESSION['final']= $torn['final'];
                }
                ?>

                <?php
                while($re=mysqli_fetch_array($rem))
                {
                     echo '<div class="cont-work Remachadora">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$re['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$re['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$re['inicial'].'</p>
                            <p class="line-through">$'.$re['final'].'</p>
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
                    $_SESSION['data']=$re;
                    $_SESSION['nombre']= $re['nombre'];
                    $_SESSION['imagen']= $re['ruta'];
                    $_SESSION['descripcion']= $re['descripcion'];
                    $_SESSION['inicial']= $re['inicial'];
                    $_SESSION['final']= $re['final'];
                }
                ?>

                <?php
                while($pa=mysqli_fetch_array($pal))
                {
                 echo '<div class="cont-work Pala">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$pa['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$pa['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$pa['inicial'].'</p>
                            <p class="line-through">$'.$pa['final'].'</p>
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
                    $_SESSION['data']=$pa;
                    $_SESSION['nombre']= $pa['nombre'];
                    $_SESSION['imagen']= $pa['ruta'];
                    $_SESSION['descripcion']= $pa['descripcion'];
                    $_SESSION['inicial']= $pa['inicial'];
                    $_SESSION['final']= $pa['final'];
                }
              ?>

                <?php
                while($serr=mysqli_fetch_array($serruc))
                {
                echo '<div class="cont-work Serruchos">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$serr['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$serr['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$serr['inicial'].'</p>
                            <p class="line-through">$'.$serr['final'].'</p>
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
                    $_SESSION['data']=$serr;
                    $_SESSION['nombre']= $serr['nombre'];
                    $_SESSION['imagen']= $serr['ruta'];
                    $_SESSION['descripcion']= $serr['descripcion'];
                    $_SESSION['inicial']= $serr['inicial'];
                    $_SESSION['final']= $serr['final'];
                }
                ?>

                <?php
                while($mar=mysqli_fetch_array($marti))
                {
                echo '<div class="cont-work Martillos">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$mar['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$mar['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$mar['inicial'].'</p>
                            <p class="line-through">$'.$mar['final'].'</p>
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
                    $_SESSION['data']=$mar;
                    $_SESSION['nombre']= $mar['nombre'];
                    $_SESSION['imagen']= $mar['ruta'];
                    $_SESSION['descripcion']= $mar['descripcion'];
                    $_SESSION['inicial']= $mar['inicial'];
                    $_SESSION['final']= $mar['final'];
                }
                ?>

                <?php
                while($lla=mysqli_fetch_array($llav))
                {
               echo '<div class="cont-work Llaves">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$lla['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$lla['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$lla['inicial'].'</p>
                            <p class="line-through">$'.$lla['final'].'</p>
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
                    $_SESSION['data']=$lla;
                    $_SESSION['nombre']= $lla['nombre'];
                    $_SESSION['imagen']= $lla['ruta'];
                    $_SESSION['descripcion']= $lla['descripcion'];
                    $_SESSION['inicial']= $lla['inicial'];
                    $_SESSION['final']= $lla['final'];
                }
                ?>

                <?php
                while($equi=mysqli_fetch_array($equip))
                {
                echo '<div class="cont-work Equipo">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$equi['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$equi['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$equi['inicial'].'</p>
                            <p class="line-through">$'.$equi['final'].'</p>
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
                    $_SESSION['data']=$equi;
                    $_SESSION['nombre']= $equi['nombre'];
                    $_SESSION['imagen']= $equi['ruta'];
                    $_SESSION['descripcion']= $equi['descripcion'];
                    $_SESSION['inicial']= $equi['inicial'];
                    $_SESSION['final']= $equi['final'];
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