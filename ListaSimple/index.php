<?php
include ("lista.php");
session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas Simple</title>
    <!--styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--script kit Font-Awesome -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="img/logoInicio.png">
</head>

<body>
    <div class="container">
        <div class="login-container">
            <form action="index.php" method="POST">
                <h2>Agregar nodo al final</h2>
                <p>Listas Simplemente Enlazadas</p>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-folder-plus"></i>
                    </div>
                    <div>
                        <h5>Nuevo Nodo al final</h5>
                        <input class="input" type="text" name="alfinal" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnfinal" class="btn" value="Agregar">
            </form>
        </div>

        <div class="login-container2">
            <form action="index.php" method="POST">
                <h2>Agregar nodo al inicio</h2>
                <p>Listas Simplemente Enlazadas</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div>
                        <h5>Nuevo Nodo al inicio</h5>
                        <input class="input" type="text" name="alinicio" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btninicio" class="btn" value="Agregar">
            </form>
        </div>


        <div class="login-container3">
            <form action="index.php" method="POST">
                <h2>Eliminar nodo de la lista</h2>
                <p>Listas Simplemente Enlazadas</p>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-trash-alt"></i>
                    </div>
                    <div>
                        <h5>Nodo a Eliminar</h5>
                        <input class="input" type="text" name="eliminar" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btneliminar" class="btn" value="Eliminar">
            </form>
        </div>


        <div class="login-container4">
            <form action="index.php" method="POST">
                <h2>Eliminar lista</h2>
                <p>Listas Simplemente Enlazadas</p>
                <input type="submit" name="clean" class="btn" value="Borrar">
            </form>
        </div>


        <div class="login-container5">
            <form action="index.php" method="POST">
                <h2>Buscar nodo en la lista</h2>
                <p>Listas Simplemente Enlazadas</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-search"></i>
                    </div>
                    <div>
                        <h5>Nodo a buscar</h5>
                        <input class="input" type="text" name="buscar" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnnBuscar" class="btn" value="Buscar">
            </form>
        </div>

        <div class="login-container6">
            <form action="index.php" method="POST">
                <h2>Mostrar lista de nodos</h2>
                <p>Listas Simplemente Enlazadas</p>
                <input type="submit" name="show" class="btn" value="Mostrar">
            </form>
        </div>
    </div>



    <!--Aqui va el codigo de cada button-->
    <?php
    //Aqui va el codigo de Mostrar Lista
    if (isset($_POST["show"])==true) {
      if(isset($_SESSION["lista"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA LISTA'
        })
        </script>";
      }else{
        if ($_SESSION["lista"]->longitud()>0) {
          echo "<script>
          Swal.fire({
            text: '".$_SESSION["lista"]->MostrarLista()."'
          })
          </script>";
        }else{
          echo "<script>
          Swal.fire({
            icon: 'warning',
            title: 'Lista Vacia'
          })
          </script>";
        }
      }
    }



  //Aqui va el codigo de Limpiar Lista
  if (isset($_POST["clean"])==true) {

    if(isset($_SESSION["lista"])==false){
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'NO EXISTE NINGUNA LISTA'
          })
          </script>";
        }else{
          if ($_SESSION["lista"]->longitud()>0) {
            $_SESSION["lista"]->vaciarLista();
            echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Lista eliminada correctamente'
            })
            </script>";
          }else{
            echo "<script>
            Swal.fire({
              icon: 'warning',
              title: 'Lista Vacia'
            })
            </script>";
          }
        }
      }



    //Aqui va el codigo de añadir nodo al final de la Lista
    if (isset($_POST["btnfinal"])) {
      if(isset($_SESSION["lista"])==false){
          $_SESSION["lista"]= new ListaSimple();
      }
      //Creo Mi nodo
      $nodo = new Nodo($_POST["alfinal"]);
      //Añado al final de la lista el nodo
      $_SESSION["lista"]->AgregarAlFinal($nodo);
      echo "<script>
              Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Agregado al final',
                text: 'Nodo agregado Correctamente',
                showConfirmButton: false,
                timer: 1500
              })
            </script>";
    }



    //Aqui va el codigo de añadir nodo al inicio de la Lista
    if (isset($_POST["btninicio"])) {
      if(isset($_SESSION["lista"])==false){
          $_SESSION["lista"]= new ListaSimple();
      }
      //Creo Mi nodo
      $nodo = new Nodo("".$_POST["alinicio"]);
      //Añado al inicio de la lista el nodo
       $_SESSION["lista"]->AgregarAlInicio($nodo);
      echo "<script>
              Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Agregado al Inicio',
                text: 'Nodo agregado Correctamente',
                showConfirmButton: false,
                timer: 1500
              })
            </script>";
    }



    //Aqui va el codigo de eliminar nodo  de la Lista
    if (isset($_POST["btneliminar"])) {

      if(isset($_SESSION["lista"])==false){
        echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'NO EXISTE NINGUNA LISTA'
        })
        </script>";
      }else{
        if ($_SESSION["lista"]->longitud()>0) {
        //Nodo a eliminar
         $nodo = $_POST["eliminar"];
        //Variable boleana que retorna el metodo Eliminar()
         $PruebaEliminar = $_SESSION["lista"]->Eliminar($nodo);
         //Valido el valor de la variable
         if ($PruebaEliminar) {
           echo "<script>
                   Swal.fire({
                     position: 'top-end',
                     icon: 'success',
                     title: 'Nodo Eliminado',
                     text: 'El nodo ha sido eliminado',
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
                    text: 'El nodo No existe',
                    showConfirmButton: false,
                    timer: 1500
                  })
                </script>";
        }
      }else{
        echo "<script>
        Swal.fire({
          icon: 'warning',
          title: 'Lista Vacia'
        })
        </script>";
      }
    }
  }



  //Aqui va el codigo de Buscar nodo  de la Lista
  if (isset($_POST["btnnBuscar"])) {

    if(isset($_SESSION["lista"])==false){
      echo "<script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'NO EXISTE NINGUNA LISTA'
      })
      </script>";
    }else{
      if ($_SESSION["lista"]->longitud()>0) {
      //Nodo a buscar
       $nodo = $_POST["buscar"];
      //Variable boleana que retorna el metodo Buscar()
       $PruebaBuscar=$_SESSION["lista"]->Buscar($nodo);
       //Valido el valor de la variable
       if ($PruebaBuscar) {
         echo "<script>
                 Swal.fire({
                   text: 'El nodo encontrado es: ".$PruebaBuscar->getDato()."'
                 })
               </script>";
      }else{
        echo "<script>
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'ERROR....',
                  text: 'El nodo No existe',
                  showConfirmButton: false,
                  timer: 1500
                })
              </script>";
      }
    }else{
      echo "<script>
      Swal.fire({
        icon: 'warning',
        title: 'Lista Vacia'
      })
      </script>";
    }
  }
}
    ?>


<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
