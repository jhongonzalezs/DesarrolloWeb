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
    <title>Subastar</title>
    <link rel="stylesheet" href="./css/styless.css">
    <link rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
        
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1f039ebe-7460-401c-a76c-95ccc643b633">*</script>
    </script>
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo1.png" alt="">
                </div>
                 <div class="enlaces" id="enlaces">
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
    
    
    <div class="descripcion">
       <h3 class="titulo">Subastar</h3>
        <form action="cargar.php" method="POST" enctype="multipart/form-data">
          <div> 
              <h5 class="titulo">FOTO DEL PRODUCTO</h5>
                <input type="file" name="img" />
              </div><br>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="Nombre del producto" name="nombre" >
							</div>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="Valor inicial" name="inicial">
							</div>
              <div class="input">
                <span class="fa fa-user-o" aria-hidden="true"></span>
                <input type="text" placeholder="Valor Final" 
                 name="final" required />
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
               <option value="Samsung">Samsung</option>
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
               <option value="Apple">Apple</option>
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
								 name="descripcion" required />
							</div>

							<input type="submit" value="Aceptar"> 
						</form>
    </div>


   
  <div class="footer">
      <div class="wrap">
        <div class="footer_grides">
                <div class="footer_grid2" style="padding:0px">
                    <h3>Acerca de nosotros</h3>
                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here desktop publishing making it look like readable English.<br><a href="#">Read more....</a></p>
                </div>
                <div class="footer_grid1">  
                        <h3>Nuestro Contacto</h3>
                            <div class="address">
                            <ul>
                              <li><a href="Index.html">Inicio</a></li>
                              <li><a href="Acerca.html">Contacto</a></li>
                               <li>Colombia.</li>
                             <li><span>E-mail :</span><a href="mailto:example@email.com">mail@example.com</a></li>
                             <li><span>Telephone :</span> +00 000 00000</li>
                             <li><span>Fax :</span> +00 000 00000</li>
                          </ul>
                        </div>
                      </div>
                <div class="footer_grid3">
                    <h3>Guia para el usuario</h3>
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
                         <li><img src="img/facebook.png" alt="" /><a href="#">Siguenos en Facebook</a></li>
                         <li><img src="img/69366.png" width="33" height="35" alt="" /><a href="#">Siguenos en Instagram</a></li>
                    </ul>
                </div>
         </div>
     <div class="clear"></div>
  </div>
         <div class="copy_right">
                <p>© 2019 Quick_Hosting. All Rights Reserved | Design by  <a href=""></a> </p>
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