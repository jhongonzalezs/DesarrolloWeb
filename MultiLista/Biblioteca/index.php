<?php
include("Biblioteca.php");
session_start();
if (!isset($_SESSION["AdictosLectura"])) {
  $_SESSION["AdictosLectura"] = new Biblioteca();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>MultiLista</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/Bibliotecastyle.css">
     <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--script kit Font-Awesome -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="img/logoInicio.png">
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">Adictos a la lectura</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#Agregar" class="nav-link smoothScroll">Agregar</a>
                    </li>

                    <li class="nav-item">
                        <a href="#Buscar" class="nav-link smoothScroll">Buscar</a>
                    </li>

                    <li class="nav-item">
                        <a href="#Eliminar" class="nav-link smoothScroll">Eliminar</a>
                    </li>

                    <li class="nav-item">
                        <a href="#Mostrar" class="nav-link smoothScroll">Mostrar</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">
                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">
                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Un hogar sin libros es como un cuerpo sin alma.</h1>
                                    <h6 data-aos="fade-up" data-aos-delay="300">Cicerón</h6>                                 
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <!-- Agregar -->
     <section class="about section" id="Agregar">
        <!--Editorial-->
        <div class="container">
        <div class="login-container">
            <form action="index.php" method="POST">
                <h2>Agregar Editorial</h2>
                <p>MultiLista</p>
                <!--ID Editoial-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-id-badge"></i>
                    </div>
                    <div>
                        <h5>ID Editorial</h5>
                        <input class="input" type="text" name="IDEd" autocomplete="off" required>
                    </div>
                </div>
                <!--Nombre Editoial-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-signature"></i>
                    </div>
                    <div>
                        <h5>Nombre Editorial</h5>
                        <input class="input" type="text" name="NameEd" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="AEditorial" class="btn" value="Agregar Editorial">
            </form>
        </div>

        <!--Libro-->
        <div class="container">
        <div class="login-container3">
            <form action="index.php" method="POST">
                <h2>Agregar Libro</h2>
                <p>MultiLista</p>
                <!--ID Editoial-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-id-badge"></i>
                    </div>
                    <div>
                        <h5>ID Editorial</h5>
                        <input class="input" type="text" name="IDEd" autocomplete="off" required>
                    </div>
                </div>
                <!--ID Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-fingerprint"></i>
                    </div>
                    <div>
                        <h5>ID Libro</h5>
                        <input class="input" type="text" name="IDLib" autocomplete="off" required>
                    </div>
                </div>

                <!--Nombre Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-book"></i>
                    </div>
                    <div>
                        <h5>Nombre del Libro</h5>
                        <input class="input" type="text" name="Namelib" autocomplete="off" required>
                    </div>
                </div>

                <!--Autor Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-user-tie"></i>
                    </div>
                    <div>
                        <h5>Autor del Libro</h5>
                        <input class="input" type="text" name="Autlib" autocomplete="off" required>
                    </div>
                </div>

                <!--Pais Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-flag-usa"></i>
                    </div>
                    <div>
                        <h5>Pais del Libro</h5>
                        <input class="input" type="text" name="paislib" autocomplete="off" required>
                    </div>
                </div>

                <!--Año P. Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div>
                        <h5>Año Publicacion del Libro</h5>
                        <input class="input" type="text" name="Plib" autocomplete="off" required>
                    </div>
                </div>

                <!--Cant Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-sort-amount-up"></i>
                    </div>
                    <div>
                        <h5>Cantidad Stock del Libro</h5>
                        <input class="input" type="text" name="Cantlib" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="Alibro" class="btn" value="Agregar Libro">
            </form>
        </div>
     </section>


     <!-- Buscar -->
     <section class="class section" id="Buscar">
        <!--Buscar Editorial-->
        <div class="container">
        <div class="login-container4">
            <form action="index.php" method="POST">
                <h2>Buscar Editorial</h2>
                <p>MultiLista</p>
                <!--ID Editoial-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-id-badge"></i>
                    </div>
                    <div>
                        <h5>ID Editorial</h5>
                        <input class="input" type="text" name="IDEd" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnBuscarE" class="btn" value="Buscar Editorial">
            </form>
        </div>

        <!--Buscar Libros-->
        <div class="container">
        <div class="login-container5">
            <form action="index.php" method="POST">
                <h2>Buscar Libro</h2>
                <p>MultiLista</p>
                <!--ID Editoial-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-id-badge"></i>
                    </div>
                    <div>
                        <h5>ID Editorial</h5>
                        <input class="input" type="text" name="IDEd" autocomplete="off" required>
                    </div>
                </div>
                <!--ID Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-fingerprint"></i>
                    </div>
                    <div>
                        <h5>ID Libro</h5>
                        <input class="input" type="text" name="IDLib" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnBuscarL" class="btn" value="Buscar Libro">
            </form>
        </div>


        <!--Buscar Año de publicacion-->
        <div class="container">
        <div class="login-container6">
            <form action="index.php" method="POST">
                <h2>Buscar Año Publicacion</h2>
                <p>MultiLista</p>
                <!--Año P. Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div>
                        <h5>Año Publicacion del Libro</h5>
                        <input class="input" type="text" name="Plib" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnPublicacion" class="btn" value="Buscar Publicaciones">
            </form>
        </div>


        <!--Buscar número de libros en una editorial-->
        <div class="container">
        <div class="login-container7">
            <form action="index.php" method="POST">
                <h2>Buscar número de libros en una editorial</h2>
                <p>MultiLista</p>
                <!--Año P. Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div>
                        <h5>ID editorial</h5>
                        <input class="input" type="text" name="IDEd" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnBuscarNum" class="btn" value="Buscar Libros Editorial">
            </form>
        </div>

     </section>


     <!-- Eliminar -->
     <section class="schedule section" id="Eliminar">
            <div class="login-container8">
            <form action="index.php" method="POST">
                <h2>Eliminar Editorial</h2>
                <p>MultiLista</p>
                <!--ID Editoial-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-id-badge"></i>
                    </div>
                    <div>
                        <h5>ID Editorial</h5>
                        <input class="input" type="text" name="IDEd" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnEliminarE" class="btn" value="Eliminar Editorial">
            </form>
        </div>

        <div class="login-container9">
            <form action="index.php" method="POST">
                <h2>Eliminar Libro</h2>
                <p>MultiLista</p>
                <!--ID Editoial-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-id-badge"></i>
                    </div>
                    <div>
                        <h5>ID Editorial</h5>
                        <input class="input" type="text" name="IDEd" autocomplete="off" required>
                    </div>
                </div>

                <!--ID Libro-->
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-fingerprint"></i>
                    </div>
                    <div>
                        <h5>ID Libro</h5>
                        <input class="input" type="text" name="IDLib" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnEliminarL" class="btn" value="Eliminar Libro">
            </form>
        </div>

        <!--Vaciar Biblioteca-->
        <div class="login-container11">
            <form action="index.php" method="POST">
                <h2>Vaciar Biblioteca</h2>
                <p>MultiLista</p>
                <input type="submit" name="btnVaciar" class="btn" value="Vaciar Biblioteca">
            </form>
        </div>

     </section>


     <!-- Mostrar -->
     <section class="contact section" id="Mostrar">
          <div class="login-container10">
            <form action="index.php" method="POST">
                <h2>Mostrar Biblioteca</h2>
                <p>MultiLista</p>
                <!--Mostrar-->
                <input type="submit" name="btnMostrar" class="btn" value="Mostrar Biblioteca">
            </form>
        </div>
     </section>

     <?php
     include_once("Editorial.php");
     include_once("Libro.php");


     //Agregar Editorial
     if (isset($_POST["AEditorial"])) {
         $EditorialID = $_POST["IDEd"];
         $NameID = $_POST["NameEd"];

         $NodoEditorial = new Editorial($EditorialID, $NameID);
         $Biblioteca =  $_SESSION["AdictosLectura"]->agregarEditorial($NodoEditorial);
        if ($Biblioteca) {
            echo "<script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Agregado al Final',
                text: 'Editorial agregado Correctamente',
                showConfirmButton: false,
                timer: 1500
              })
            </script>";
        }else {
            echo "<script>
                  Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'ERROR....',
                    text: 'NO EXISTE NINGUNA BIBLIOTECA',
                    showConfirmButton: false,
                    timer: 1500
                  })
                </script>";
        }
    }



    //Agregar Libro
    if (isset($_POST["Alibro"])==true) {
        $EditorialID=$_POST["IDEd"];
        $LibroID=$_POST["IDLib"];
        $Namelib=$_POST["Namelib"];
        $Autlib=$_POST["Autlib"];
        $paislib=$_POST["paislib"];
        $Plib=$_POST["Plib"];
        $Stock=$_POST["Cantlib"];

        $NodoLibro = new Libro($LibroID,$Namelib,$Autlib,$paislib,$Plib,$Stock);
        $LibroNuevo = $_SESSION["AdictosLectura"]->agregarLibro($NodoLibro,$EditorialID);

        if ($LibroNuevo) {
            echo "<script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Agregado al Final',
                text: 'Libro ".$NodoLibro->getNombre()." agregado Correctamente',
                showConfirmButton: false,
                timer: 1500
              })
            </script>";
        }else{
            echo "<script>
                  Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'ERROR....',
                    text: 'NO EXISTE NINGUNA EDITORIAL',
                    showConfirmButton: false,
                    timer: 1500
                  })
                </script>";
        }

    }

    //Buscar Editorial
    if (isset($_POST["btnBuscarE"])==true) {
        if(isset($_SESSION["AdictosLectura"])==false){
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'NO EXISTE NINGUNA BIBLIOTECA'
            })
            </script>";
        }else{
            $EditorialID = $_POST["IDEd"];
            $EditorialBuscada = $_SESSION["AdictosLectura"]->buscarEditorial($EditorialID);

            if ($EditorialBuscada != null) {
                echo "<script>
                 Swal.fire({
                   text: 'La Editorial Encontrada es: ".$EditorialBuscada->getNombre()."'
                 })
               </script>";
            }else{
                 echo "<script>
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'ERROR....',
                  text: 'LA EDITORIAL NO EXISTE',
                  showConfirmButton: false,
                  timer: 1500
                })
              </script>";
            }
        }
    }


    //Buscar Libro
    if (isset($_POST["btnBuscarL"])) {
        if(isset($_SESSION["AdictosLectura"])==false){
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'NO EXISTE NINGUNA EDITORIAL'
            })
            </script>";
        }else{
            $EditorialID=$_POST["IDEd"];
            $LibroID=$_POST["IDLib"];

            $LibroBuscado = $_SESSION["AdictosLectura"]->buscarLibro($EditorialID,$LibroID);
            if ($LibroBuscado != null) {
                echo "<script>
                 Swal.fire({
                   text: 'El Libro Encontrado Es: ".$LibroBuscado->getNombre()."'
                 })
               </script>";
            }else{
               echo "<script>
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'ERROR....',
                  text: 'EL LIBRO NO EXISTE',
                  showConfirmButton: false,
                  timer: 1500
                })
              </script>";
            }
        }
    }


    //Buscar el número de libros publicados en un año específico
    if (isset($_POST["btnPublicacion"])==true) {
        if(isset($_SESSION["AdictosLectura"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA BIBLIOTECA'
        })
        </script>";
        }else{
            $Plib=$_POST["Plib"];
            $numLibrosPublicados = $_SESSION["AdictosLectura"]->getNumLibrosPublicadosEn($Plib);

            if ($numLibrosPublicados > 0) {
                echo "<script>
                 Swal.fire({
                   text: 'El número de libros publicados en el año: ".$Plib." Es: ".$numLibrosPublicados."'
                 })
               </script>";
            } else {
                echo "<script>
                Swal.fire({
                icon: 'warning',
                title: 'No se encontraron libro publicados en el año: ".$Plib."'
            })
            </script>";
            }
        }
    }



    //Buscar el número de libros publicados en una editorial específica
    if (isset($_POST["btnBuscarNum"])) {
        if(isset($_SESSION["AdictosLectura"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA BIBLIOTECA'
        })
        </script>";
        }else{
            $EditorialID = $_POST["IDEd"];
            $BuscarNumEditorial = $_SESSION["AdictosLectura"]->buscarEditorial($EditorialID);

            $numLibrosPublicados = $_SESSION["AdictosLectura"]->getNumLibros($EditorialID);

            if ($numLibrosPublicados > 0) {
                echo "<script>
                 Swal.fire({
                   text: 'El número de libros publicados en la editorial: ".$BuscarNumEditorial->getNombre()." Es: ".$numLibrosPublicados."'
                 })
               </script>";
            } else {
                echo "<script>
                Swal.fire({
                icon: 'warning',
                title: 'No se encontraron libro publicados en la editorial: ".$BuscarNumEditorial->getNombre()."'
                })
                </script>";
            }
        }
    }

    //Eliminar editorial
    if (isset($_POST["btnEliminarE"])) {
        if(isset($_SESSION["AdictosLectura"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA BIBLIOTECA'
        })
        </script>";
        }else{
            $EditorialID=$_POST["IDEd"];
            $Eliminacion = $_SESSION["AdictosLectura"]->eliminarEditorial($EditorialID);
            if ($Eliminacion) {
                echo "<script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Eliminar Editorial',
                text: 'Editorial ".$EditorialID." Eliminada Correctamente',
                showConfirmButton: false,
                timer: 1500
              })
            </script>";
            } else {
                echo "<script>
                Swal.fire({
                icon: 'warning',
                title: 'No se encontro la Editorial: ".$EditorialID."'
                })
                </script>";
            }       
        }
    }


    //Eliminar Libro
    if (isset($_POST["btnEliminarL"])) {
        if(isset($_SESSION["AdictosLectura"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA BIBLIOTECA'
        })
        </script>";
        }else{
            $EditorialID=$_POST["IDEd"];
            $LibroID=$_POST["IDLib"];

            $_SESSION["AdictosLectura"]->eliminarLibro($EditorialID,$LibroID);

            echo "<script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Eliminar Libro',
                text: 'El Libro: ".$LibroID.", de la Editorial: ".$EditorialID." ha sido Eliminado Correctamente',
                showConfirmButton: false,
                timer: 2500
              })
            </script>";
        }
    }


    //Vaciar Biblioteca
    if (isset($_POST["btnVaciar"])) {
        if(isset($_SESSION["AdictosLectura"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA BIBLIOTECA'
        })
        </script>";
        }else{
            $Eliminacion = $_SESSION["AdictosLectura"]->vaciarBiblioteca();
            if ($Eliminacion) {
                echo "<script>
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Eliminar Biblioteca',
                text: 'Biblioteca Eliminada Correctamente',
                showConfirmButton: false,
                timer: 1500
              })
            </script>";
            } else {
                echo "<script>
                Swal.fire({
                icon: 'warning',
                title: 'No se elimino la Biblioteca'
                })
                </script>";
            }       
        }
    }



    //Mostrar Biblioteca
    if(isset($_POST["btnMostrar"])==true){
        if(isset($_SESSION["AdictosLectura"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA MULTILISTA'
        })
        </script>";
      }else{
             echo "<script>
                window.location.href = 'mostrar.php';
             </script>";
          //echo " ".$_SESSION["AdictosLectura"]->Mostrar();
        }
    }


     ?>





     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/custom.js"></script>
     <script type="text/javascript" src="js/main.js"></script>

</body>
</html>