<?php 
include("seguridad.php");
session_start();
if (isset($_SESSION['correo'])){
?>

<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subastar</title>
    <link rel="stylesheet" href="./css/styless.css">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
        
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1f039ebe-7460-401c-a76c-95ccc643b633">*</script>
    </script>
<style type="text/css">
  .boton_1{
    text-decoration: none;
    padding: 3px;
    padding-left: 70px;
    padding-right: 70px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 30px;
    font-style: italic;
    color: #006505;
    background-color: #BCCAF4;
    border-radius: 1px;
    border: 2px double #BCCAF4;
  }
  .boton_1:hover{
    opacity: 0.6;
    text-decoration: none;
  }

.valores {
    margin-bottom: 1em;
    padding: 12px 12px;
    border: 1px solid #eee;
    background: #eee;
}

.valores span {
    font-size: 15px;
    color: #464646;
    margin-right: 10px;
}

.valores {
    color: black;
    font-size: 30px;
    letter-spacing: 2px;
    box-sizing: border-box;
    border: 20;
    border-color: white; 
    outline: none;
    background: white;
    width: 365px;
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

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header >
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo1.png" alt="">
                </div>
                 <div class="enlaces" id="enlaces">
                  <h5>Usuario: <?php echo $_SESSION['Usuarios'] ?></h5><br>
                    <a href="Categoria.php" id="enlace-equipo" class="btn-header">Categoria</a>
                    <a href="Acerca.php" id="enlace-servicio" class="btn-header">Contacto</a>
                    <a href="pagina.php" id="enlace-trabajo" class="btn-header">Perfil</a>
                    <a href="salir.php" id="enlace-equipo" class="btn-header">Cerrar Sesión</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Empieza a subastar</h1>
            <h2>Subasta lo que quieras</h2>
        </div>
    </header>
    
    <br><br><br><br><br>
    <div class="descripcion">
       <h3 class="titulo">Subastar</h3>
        <form  action="cargar.php" method="POST" enctype="multipart/form-data" align="Center">
          <div> 
              <h5 class="titulo">FOTO DEL PRODUCTO</h5>
                <input type="file" name="img" />
              </div><br>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="Nombre del producto" name="nombre" autocomplete="off"  >
							</div><br>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input class="valores" type="number" placeholder="Valor inicial" onkeydown="noPuntoComa( event )" name="inicial" autocomplete="off" required />
							</div>
              <div class="input">
                <span class="fa fa-user-o" aria-hidden="true"></span>
                <input class="valores" type="number" placeholder="Valor Final" onkeydown="noPuntoComa( event )" name="final" autocomplete="off"  required />
              </div>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								
							<select name="categoria" class="categorias">
           <optgroup label="Textiles">
               <option value="0">Seleccione la categoria</option>
               <option value="Camisas">Camisas</option>
               <option value="Blusas">Blusas</option>
               <option value="Jeans">Jeans</option>
               <option value="Pantalones">Pantalones</option>
               <option value="Chaquetas">Chaquetas</option>
               <option value="Zapatos">Zapatos</option>
           </optgroup>
           <optgroup label="Electrodomesticos">
               <option value="Neveras">Neveras</option>
               <option value="Cafeteras">Cafeteras</option>
               <option value="Climatización">Climatización</option>
               <option value="Hornos">Hornos</option>
               <option value="Lavadoras">Lavadoras</option>
               <option value="Estufas">Estufas</option>
               <option value="Televisores">Televisores</option>
               <option value="DVD">Teatro En-Casa</option>
           </optgroup>
           <optgroup label="Celulares">
               <option value="Apple">Apple</option>
               <option value="Moviles Samsung">Moviles Samsung</option>
               <option value="Huawei">Huawei</option>
               <option value="Motorola">Motorola</option>
               <option value="Sony">Sony</option>
               <option value="Nokia">Nokia</option>
           </optgroup>
           <optgroup label="Joyerias">
               <option value="Collares">Collares</option>
               <option value="Relojes">Relojes</option>
               <option value="Anillos">Anillos</option>
               <option value="Pulseras">Pulseras</option>
               <option value="Aretes">Aretes</option>
           </optgroup>
           <optgroup label="Herramientas">
               <option value="Destorinilladores">Destorinilladores</option>
               <option value="Tornillos">Tornillos</option>
               <option value="Remachadora">Remachadora</option>
               <option value="Pala">Pala</option>
               <option value="Serrucho">Serrucho</option>
               <option value="Martillos">Martillos</option>
               <option value="Llaves">Llaves</option>
               <option value="Equipo">Equipo de Protección</option>
           </optgroup>
           <optgroup label="Coches">
               <option value="Chevrolet">Chevrolet</option>
               <option value="Renault">Renault</option>
               <option value="Toyota">Toyota</option>
               <option value="Kia">Kia</option>
               <option value="Mazda">Mazda</option>
               <option value="Nissan">Nissan</option>
               <option value="Ford">Ford</option>
           </optgroup>
           <optgroup label="Acesorios para el hogar">
               <option value="Sofas">Sofas</option>
               <option value="Colchones">Colchones</option>
               <option value="Sillas">Sillas</option>
               <option value="Mesas">Mesas</option>
               <option value="Decoraciones">Decoraciones</option>
               <option value="Bife">Muebles</option>
               <option value="Alcobas">Alcobas</option>
               <option value="Mecedoras">Mecedoras</option>
           </optgroup>
           <optgroup label="Computadores">
               <option value="Lenovo">Lenovo</option>
               <option value="HP">HP</option>
               <option value="Dell">Dell</option>
               <option value="Acer">Acer</option>
               <option value="Toshiba">Toshiba</option>
               <option value="Macbook">Macbook</option>
               <option value="Asus">Asus</option>
               <option value="Samsung">Samsung</option>
           </optgroup>
           <optgroup label="Deportes">
               <option value="Boxeo">Boxeo</option>
               <option value="Natación">Natación</option>
               <option value="Tenis">Tenis</option>
               <option value="Beisbol">Beisbol</option>
               <option value="Baloncesto">Baloncesto</option>
               <option value="Soccer">Futbol Soccer</option>
               <option value="Americano">Futbol Americano</option>
               <option value="Voleibol">Voleibol</option>
           </optgroup>
       </select>	
			</div>
			<div class="input">
			<span class="fa fa-user-o" aria-hidden="true"></span>
			<input type="text" placeholder="Descripción del producto" 
			name="descripcion" autocomplete="off"  required />
			</div>
              <div>
			<input type="submit" value="Aceptar" class="boton_1"> 
            </div>
			</form>
    </div>
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
  header("Location: Login.html");
}

?>