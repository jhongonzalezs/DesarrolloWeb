<?php
session_start();
if (isset($_SESSION['correo'])){
include("conexion.php");
$con= conectar();


$visual=$_SESSION['nombre'];

$consult=mysqli_query($con, "SELECT * FROM `imagenes` WHERE nombre=('$visual') ");

if(mysqli_num_rows($consult)>0){

	$result=mysqli_fetch_array($consult);

	$_SESSION['nombre']= $result['nombre'];
    $_SESSION['imagen']= $result['ruta'];
    $_SESSION['descripcion']= $result['descripcion'];
    $_SESSION['inicial']= $result['inicial'];
    $_SESSION['foto']= $result['user_id'];
    $_SESSION['idimagen']= $result['id_imagen'];
    $_SESSION['usuario123']= $result['usuario'];
    $_SESSION['post']= $result['correo'];
    $_SESSION['cel']= $result['celular'];

    $foro=$_SESSION['idimagen'];
    $vista=mysqli_query($con, "SELECT * FROM Valores WHERE imagen_id=$foro");
    if($foro=$foro){
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizaciónes</title>
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
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<style type="text/css">
	h4{
		font-weight: bold;
    }
    h2{
		font-weight: bold;
    }
        table {
    border-collapse: collapse;
    border-spacing: 0;
}

.enpujar {
    margin: right;
}

.valores {
    margin-bottom: 1em;
    padding: 13px 15px;
    border: 1px solid #eee;
    background: #eee;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.valores span {
    font-size: 15px;
    color: #464646;
    margin-right: 10px;
}

.valores {
    color: black;
    font-size: 14px;
    letter-spacing: 1px;
    box-sizing: border-box;
    border: 20;
    border-color: black; 
    outline: none;
    background: transparent;
    width: 50%;
}
 .valores {
        font-size: 13px;
    }
    .valores {
        padding: 12px 12px;
    }
</style>
<script type="text/javascript">
  function noPuntoComa( event ) {
  
    var e = event || window.event;
    var key = e.keyCode || e.which;

    if ( key === 110 || key === 190 || key === 188 ) {     
        
       e.preventDefault();     
    }
}
</script>

</head>


<body class="hidden" onload="timer()">

    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header class="head">

        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <a href="index.html"><img src="img/logo2.png" alt=""></a>
                </div>
                <div class="enlaces" id="enlaces">
                    <h5>Usuario: <?php echo $_SESSION['Usuarios'] ?></h5><br>
                    <a href="pagina.php" id="enlace-inicio" class="btn-header">Perfil</a>
                    <a href="Categoria.php" id="enlace-equipo" class="btn-header">Categoria</a>
                    <a href="Acerca.php" id="enlace-servicio" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Visualización</h1>
            <h2></h2>
        </div>
    </header>
<main>
  
    <div class="innerf-pages section py-5">
        <div class="container">
            <div class="row my-sm-5">
                <div class="col-lg-4 single-right-left">
                    <div class="grid images_3_of_2">
                        <div class="flexslider1">
                            <ul class="slides">
                                <li data-thumb="productos/pf1.jpg">
                                    <div class="thumb-image">
                                    <img src="<?php echo $_SESSION['imagen'] ?>" data-imagezoom="true" width="600" height="500" alt=" " class="img-fluid"></div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                    <h3><?php echo $_SESSION['nombre'] ?></h3>
                    </h3>
                    <div class="caption">

                        <ul class="rating-single">
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                        <h6>$<?php echo $_SESSION['inicial']?></h6>
                    </div>
                    <div class="desc_single">
                        <h5><?php echo $_SESSION['descripcion'] ?></h5>
                        <p>.</p>
                    </div>
                    <br>                    
                    <h2>Ofertas del articulo subastado:</h2>
                    <br>
                    <br>
                    <?php
                        while($val=mysqli_fetch_array($vista))
                        {                        
                         echo '<div class="textos-work"><h4>'.$val['nombre'].':  $'.$val['valor'].'</h4></div>'; 
                        }
                        
                    ?>

                    <div class="d-sm-flex justify-content-between">
                        <div class="occasional">
                            <h5 class="sp_title mb-3"></h5>
                            <ul class="single_specific">
                                <li>
                                    <span></span></li>
                                <li>
                                    <span></span> </li>
                                <li>
                                    <span></span></li>
                                <li>
                                    <span></span></li>
                            </ul>
                        </div>
                        <div class="color-quality mt-sm-0 mt-4">
                            <h5 class="sp_title mb-3">Tiempo de la subasta</h5>
                            <span id="clock"></span>
                            <script src="js/countdown.js"></script>
                            <ul class="single_serv">
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li class="mt-2">
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $val=mysqli_fetch_array($vista);
                    $_SESSION['yes']= $val['imagen_id'];
                    $h=$_SESSION['yes'];
                    ?>
                    <div class="description">
                        <?php
                        $select=mysqli_query($con, "SELECT valor FROM `valores` WHERE imagen_id=$foro");
                        $mostrar=mysqli_fetch_array($select);
                        $_SESSION['valor']=$mostrar['valor'];
                        $seca=$_SESSION['valor'];
                        $nuevo=$_SESSION['valor']+2000;
                        $inicio=$_SESSION['inicial']+1000;
                        if($inicio>1000000){
                        $nuevo=$_SESSION['valor']+10000;
                        $inicio=$_SESSION['inicial']+10000;
                        if($seca>0){
                        ?>
                        <h5><?php echo 'Valor minimo '.$nuevo.'. ';  ?></h5>
                        <form action="codigo.php" method="POST">
                            <input class="valores" type="number" placeholder="Nuevo Valor" onkeydown="noPuntoComa( event )" name="valor" autocomplete="off" required />
                            <input class="enpujar" type="submit" name="Pujar" value="Pujar">
                        </form>
                        <?php
                        }else{
                        ?>
                        <h5><?php echo 'Valor minimo '.$inicio.' ';  ?></h5>
                        <form action="codigo.php" method="POST">
                            <input class="valores" type="number" placeholder="Nuevo Valor" onkeydown="noPuntoComa( event )" name="valor" autocomplete="off"  required />
                            <input class="enpujar" type="submit" name="Pujar" value="Pujar">
                        </form>
                        <?php
                        }
                        }else{
                        if($seca>0){
                        $nuevo=$_SESSION['valor']+2000;
                        $inicio=$_SESSION['inicial']+1000;
                        ?>
                        <h5><?php echo 'Valor minimo '.$nuevo.'. ';  ?></h5>
                        <form action="codigo.php" method="POST">
                            <input class="valores" type="number" placeholder="Nuevo Valor" onkeydown="noPuntoComa( event )" name="valor" autocomplete="off"  required />
                            <input class="enpujar" type="submit" name="Pujar" value="Pujar">
                        </form>
                        <?php
                        }else{
                        ?>
                        <h5><?php echo 'Valor minimo '.$inicio.' ';  ?></h5>
                        <form action="codigo.php" method="POST">
                            <input class="valores" type="number" placeholder="Nuevo Valor" onkeydown="noPuntoComa( event )" name="valor" autocomplete="off" required />
                            <input class="enpujar" type="submit" name="Pujar" value="Pujar">
                        </form>
                        <?php
                    }
                }
                        ?>
                    </div>
                    <!-- //card -->
                </div>
                <!-- //card group -->
                <!--//new_arrivals-->
            </div>
        </div>
    </div>
    <!--// Single -->
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
    <script src="js/jquery-2.2.3.min.js"></script>

    <!-- FlexSlider -->
    <script src="js/jquery.flexslider.js"></script>
   
    <!-- //FlexSlider-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- zoom -->
    <script src="js/imagezoom.j"></script>
    <!-- zoom-->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>

    <script>
        $(document).ready(function () {
       
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>


</html>

<?php
}else{
    header("Location: Login.php");
}
}else{
    echo '<script type="text/javascript"> alert("Error de Imagen"); window.location="Categoria.php";</script>';
}
}

?>


