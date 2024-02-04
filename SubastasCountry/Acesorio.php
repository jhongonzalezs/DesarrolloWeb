<!--Validacion para el inicio de session-->
<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<?php
include("conexion.php");/*Obtener La conexion de la base de datos*/
$con= conectar();/*Funcion para conectar*/
/*Obtener las imagenes de la base de datos para categoria, Acessorios*/
$sofas="SELECT * FROM `imagenes` WHERE categoria=('Sofas') ";
$sofa=mysqli_query($con,$sofas);

$colchones="SELECT * FROM `imagenes` WHERE categoria=('Colchones') ";
$colchon=mysqli_query($con,$colchones);

$sillas="SELECT * FROM `imagenes` WHERE categoria=('Sillas') ";
$silla=mysqli_query($con,$sillas);

$mesas="SELECT * FROM `imagenes` WHERE categoria=('Mesas') ";
$mesa=mysqli_query($con,$mesas);

$decoraciones="SELECT * FROM `imagenes` WHERE categoria=('Decoraciones') ";
$decoracion=mysqli_query($con,$decoraciones);

$bifes="SELECT * FROM `imagenes` WHERE categoria=('Bife') ";
$bife=mysqli_query($con,$bifes);

$alcobas="SELECT * FROM `imagenes` WHERE categoria=('Alcobas') ";
$alcoba=mysqli_query($con,$alcobas);

$mecedoras="SELECT * FROM `imagenes` WHERE categoria=('Mecedoras') ";
$mecedora=mysqli_query($con,$mecedoras);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accesorios del hogar</title>
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
                    <h5>Usuario: <?php echo $_SESSION['Usuarios'] ?></h5><br><!--El Nombre del usuario que inicio session con su cuenta-->
                    <a href="pagina.php" id="enlace-inicio" class="btn-header">Perfil</a><!--Redireccionar al perfil/inicio de la pagina-->
                    <a href="Categoria.php" id="enlace-equipo" class="btn-header">Categoria</a><!--Redireccionar a Las categorias-->
                    <a href="subastar.php" id="enlace-servicio" class="btn-header">Subastar</a><!--Subastar Un articulo-->
                    <a href="salir.php" id="enlace-servicio" class="btn-header">Cerrar Session</a><!--Cerrar Session De la Cuenta-->
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Accesorios del hogar</h1>
            <h2></h2>
        </div>
    </header>
<main>
    <section class="work contenedor" id="trabajo">
               <div class="wrap1">
              <h1>Categorias</h1>
              </div>
             <div class="botones-work">
                <ul><!--Presentacion de los tipos de categoria que presenta la categoria de acesorios-->
                    <li class="filter" data-nombre='Sofas'>Sofas</li>
                    <li class="filter" data-nombre='Colchones'>Colchones</li>
                    <li class="filter" data-nombre='Sillas'>Sillas</li>
                    <li class="filter" data-nombre='Mesas'>Mesas</li>
                    <li class="filter" data-nombre='Decoraciones'>Decoraciones</li>
                    <li class="filter" data-nombre='Bife'>bife Muebles</li>
                    <li class="filter" data-nombre='Alcobas'>Alcobas</li>
                    <li class="filter" data-nombre='Mecedoras'>Mecedoras</li>
                </ul>
            </div>

                <div class="galeria-work">
                     <?php
                while($sof=mysqli_fetch_array($sofa))/*Mostrar Todo lo que este en la base de datos como Sofa*/
                {
                   echo '<div class="cont-work Sofas">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$sof['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$sof['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$sof['inicial'].'</p>
                            <p class="line-through">$'.$sof['final'].'</p>
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
                    $_SESSION['nombre']= $sof['nombre'];
                    $_SESSION['imagen']= $sof['ruta'];
                    $_SESSION['descripcion']= $sof['descripcion'];
                    $_SESSION['inicial']= $sof['inicial'];
                    $_SESSION['final']= $sof['final'];
                }
                ?>

                <?php
                while($colcha=mysqli_fetch_array($colchon))/*Mostrar Todo lo que este en la base de datos como Colchon*/
                {
                    echo '<div class="cont-work Colchones">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$colcha['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$colcha['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$colcha['inicial'].'</p>
                            <p class="line-through">$'.$colcha['final'].'</p>
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
                    $_SESSION['nombre']= $colcha['nombre'];
                    $_SESSION['imagen']= $colcha['ruta'];
                    $_SESSION['descripcion']= $colcha['descripcion'];
                    $_SESSION['inicial']= $colcha['inicial'];
                    $_SESSION['final']= $colcha['final'];
                }
                ?>

                <?php
                while($si=mysqli_fetch_array($silla))/*Mostrar Todo lo que este en la base de datos como Sillas*/
                {
                    echo '<div class="cont-work Sillas">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$si['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$si['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$si['inicial'].'</p>
                            <p class="line-through">$'.$si['final'].'</p>
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
                    $_SESSION['nombre']= $si['nombre'];
                    $_SESSION['imagen']= $si['ruta'];
                    $_SESSION['descripcion']= $si['descripcion'];
                    $_SESSION['inicial']= $si['inicial'];
                    $_SESSION['final']= $si['final'];
                }
                ?>

                <?php
                while($mes=mysqli_fetch_array($mesa))/*Mostrar Todo lo que este en la base de datos como Mesa*/
                {
                echo '<div class="cont-work Mesas">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$mes['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$mes['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$mes['inicial'].'</p>
                            <p class="line-through">$'.$mes['final'].'</p>
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
                    $_SESSION['nombre']= $mes['nombre'];
                    $_SESSION['imagen']= $mes['ruta'];
                    $_SESSION['descripcion']= $mes['descripcion'];
                    $_SESSION['inicial']= $mes['inicial'];
                    $_SESSION['final']= $mes['final'];
                }
                 ?>

                <?php
                while($decora=mysqli_fetch_array($decoracion))/*Mostrar Todo lo que este en la base de datos como Decoracion*/
                {
              echo '<div class="cont-work Decoraciones">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$decora['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$decora['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$decora['inicial'].'</p>
                            <p class="line-through">$'.$decora['final'].'</p>
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
                    $_SESSION['nombre']= $decora['nombre'];
                    $_SESSION['imagen']= $decora['ruta'];
                    $_SESSION['descripcion']= $decora['descripcion'];
                    $_SESSION['inicial']= $decora['inicial'];
                    $_SESSION['final']= $decora['final'];
                }
                ?>

                <?php
                while($bi=mysqli_fetch_array($bife))/*Mostrar Todo lo que este en la base de datos como Bife*/
                {
               echo '<div class="cont-work Bife">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$bi['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$bi['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$bi['inicial'].'</p>
                            <p class="line-through">$'.$bi['final'].'</p>
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
                    $_SESSION['nombre']= $bi['nombre'];
                    $_SESSION['imagen']= $bi['ruta'];
                    $_SESSION['descripcion']= $bi['descripcion'];
                    $_SESSION['inicial']= $bi['inicial'];
                    $_SESSION['final']= $bi['final'];
                }
                ?>

                <?php
                while($alco=mysqli_fetch_array($alcoba))/*Mostrar Todo lo que este en la base de datos como Alcobas*/
                {
                    echo '<div class="cont-work Alcobas">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$Alcobas['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$Alcobas['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$Alcobas['inicial'].'</p>
                            <p class="line-through">$'.$Alcobas['final'].'</p>
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
                    $_SESSION['nombre']= $Alcobas['nombre'];
                    $_SESSION['imagen']= $Alcobas['ruta'];
                    $_SESSION['descripcion']= $Alcobas['descripcion'];
                    $_SESSION['inicial']= $Alcobas['inicial'];
                    $_SESSION['final']= $alcobas['final'];
                }
                ?>

                <?php
                while($mecer=mysqli_fetch_array($mecedora))/*Mostrar Todo lo que este en la base de datos como Decoraciones*/
                {
                    echo '<div class="cont-work Mecedoras">
                    <div class="img-work">
                    <div class="men-thumb-item">
                    <img src="'.$mecer['ruta'].'"  width="450px" height="253px" alt="img" class="card-img-top">
                    <div class="textos-work"><h4>'.$mecer['nombre'].'</h4>
                    </div>
                    <div class="card-body  py-3 px-2">
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">$'.$mecer['inicial'].'</p>
                            <p class="line-through">$'.$mecer['final'].'</p>
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
                    $_SESSION['nombre']= $mecer['nombre'];
                    $_SESSION['imagen']= $mecer['ruta'];
                    $_SESSION['descripcion']= $mecer['descripcion'];
                    $_SESSION['inicial']= $mecer['inicial'];
                    $_SESSION['final']= $mecer['final'];
                }
                ?>

            </div>
        </section>
    </main>


<div class="footer">
      <div class="wrap">
         <div class="footer_grides"><!--Informacion Adicional De la pagina-->
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

<!--Codigo JavaScript-->
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/filtro.js"></script>

</body>
</html>
<!--Cierre de la validacion-->
<?php
}else{
    header("Location: Login.php");
}

?>