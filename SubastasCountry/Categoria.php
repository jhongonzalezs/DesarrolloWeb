<!--Validacion para el inicio de session-->
<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.min.css">
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1f039ebe-7460-401c-a76c-95ccc643b633"></script>
<!-- End of  Zendesk Widget script -->

</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>

        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo2.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <h5>Usuario: <?php echo $_SESSION['Usuarios'] ?></h5><br>
                    <a href="pagina.php" id="enlace-equipo" class="btn-header">Perfil</a>
                    <a href="Acerca.php" id="enlace-equipo" class="btn-header">Contactos</a>
                    <a href="subastar.php" id="enlace-equipo" class="btn-header">Subastar</a>
                    <a href="salir.php" id="enlace-equipo" class="btn-header">Cerrar Session</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Categorias</h1>
            <h2></h2>
        </div>
    </header>
<main>
<section class="work contenedor" id="trabajo">
              <div class="wrap1">
              <h1>Categorias</h1>
              </div>

     <div class="content-all">
         <div class="content-img">        
            <a href="ropa.php"><img src="img/1.png">      
            <div class="content-txt">
                <h2>Textiles</h2>
                <p></p>                
            </div>     
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>        
        </div> 
        <div class="content-img">    
            <a href="Electrodomesticos.php"><img src="img/2.png">    
            <div class="content-txt">
                <h2>Electrodomesticos</h2>
                <p></p>                
            </div>         
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>    
        </div> 
        <div class="content-img">    
            <a href="Celulares.php"><img src="img/3.png">       
            <div class="content-txt">
                <h2>Celulares</h2>
                <p></p>                
            </div>  
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>    
        </div>     
    </div>
    <div class="content-all">     
        <div class="content-img">         
            <a href="joyeria.php"><img src="img/4.png">       
            <div class="content-txt">
                <h2>Joyeria</h2>
                <p></p>                
            </div>         
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>     
        <div class="content-img">          
            <a href="deportes.php"><img src="img/5.png">         
            <div class="content-txt">
                <h2>Deportes</h2>
                <p></p>                
            </div>          
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>      
      <div class="content-img">          
            <a href="Herramientas.php"><img src="img/6.png">       
            <div class="content-txt">
                <h2>Herramientas</h2>
                <p></p>                
            </div>          
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>       
    </div>
    <div class="content-all">     
        <div class="content-img">        
            <a href="Coches.php"><img src="img/7.png">       
            <div class="content-txt">
                <h2>Coches</h2>
                <p></p>                
            </div>        
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>     
        <div class="content-img">         
            <a href="Computador.php"><img src="img/8.png">
            <div class="content-txt">
                <h2>Computadores</h2>
                <p></p>                
            </div>        
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>        
        </div>     
        <div class="content-img">          
            <a href="Acesorio.php"><img src="img/9.png">          
            <div class="content-txt">
                <h2>Articulos del hogar</h2>
                <p></p>                
            </div>          
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>      
    </div>
</section>                                                                                                                                
</main>
<br>
<br>    
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.min.css">
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1f039ebe-7460-401c-a76c-95ccc643b633"></script>
<!-- End of  Zendesk Widget script -->

</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>

        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo2.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="index.html" id="enlace-equipo" class="btn-header">Inicio</a>
                    <a href="Acerca.php" id="enlace-equipo" class="btn-header">Contactos</a>
                    <a href="Login.php" id="enlace-equipo" class="btn-header">Iniciar Session</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Categorias</h1>
            <h2></h2>
        </div>
    </header>
<main>
<section class="work contenedor" id="trabajo">
              <div class="wrap1">
              <h1>Categorias</h1>
              </div>

     <div class="content-all">
         <div class="content-img">        
            <a href="ropa.php"><img src="img/1.png">      
            <div class="content-txt">
                <h2>Textiles</h2>
                <p></p>                
            </div>     
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>        
        </div> 
        <div class="content-img">    
            <a href="Electrodomesticos.php"><img src="img/2.png">    
            <div class="content-txt">
                <h2>Electrodomesticos</h2>
                <p></p>                
            </div>         
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>    
        </div> 
        <div class="content-img">    
            <a href="Celulares.php"><img src="img/3.png">       
            <div class="content-txt">
                <h2>Celulares</h2>
                <p></p>                
            </div>  
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>    
        </div>     
    </div>
    <div class="content-all">     
        <div class="content-img">         
            <a href="joyeria.php"><img src="img/4.png">       
            <div class="content-txt">
                <h2>Joyeria</h2>
                <p></p>                
            </div>         
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>     
        <div class="content-img">          
            <a href="deportes.php"><img src="img/5.png">         
            <div class="content-txt">
                <h2>Deportes</h2>
                <p></p>                
            </div>          
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>      
      <div class="content-img">          
            <a href="Herramientas.php"><img src="img/6.png">       
            <div class="content-txt">
                <h2>Herramientas</h2>
                <p></p>                
            </div>          
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>       
    </div>
    <div class="content-all">     
        <div class="content-img">        
            <a href="Coches.php"><img src="img/7.png">       
            <div class="content-txt">
                <h2>Coches</h2>
                <p></p>                
            </div>        
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>     
        <div class="content-img">         
            <a href="Computador.php"><img src="img/8.png">
            <div class="content-txt">
                <h2>Computadores</h2>
                <p></p>                
            </div>        
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>        
        </div>     
        <div class="content-img">          
            <a href="Acesorio.php"><img src="img/9.png">          
            <div class="content-txt">
                <h2>Articulos del hogar</h2>
                <p></p>                
            </div>          
            <div class="content-1"></div>
            <div class="content-2"></div>
            <div class="content-3"></div>
            <div class="content-4"></div>          
        </div>      
    </div>
</section>                                                                                                                                
</main>
<br>
<br>    
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
                              <li><a href="Acerca.html">Contacto</a></li>
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
}
?>


