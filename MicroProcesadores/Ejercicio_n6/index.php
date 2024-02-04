<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio N6</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<hgroup>
  <h1>Colores</h1>
</hgroup>
<form method="POST" action="index.php">
  <div class="group">
    <input type="text" name="valor" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Numero</label>
  </div>
  <input type="submit" value="Mostrar Color" class="button buttonBlue" name="validar">
</form>


<?php
if (isset($_POST["validar"])) {
    $numero = $_POST["valor"];
    if ($numero==1) {
        echo "<style type='text/css'>
            body{
            background-image: url('img/yellow.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>";
        echo "<script>
            Swal.fire({
            text: 'El color # ".$numero." es: Amarillo'
        })
        </script>";
    }elseif ($numero==2) {
        echo "<style type='text/css'>
            body{
            background-image: url('img/green.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>";
        echo "<script>
            Swal.fire({
            text: 'El color # ".$numero." es: Verde'
        })
        </script>";
    }elseif ($numero==3) {
        echo "<style type='text/css'>
            body{
            background-image: url('img/blue.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>";
        echo "<script>
            Swal.fire({
            text: 'El color # ".$numero." es: Azul'
        })
        </script>";
    }elseif ($numero==4) {
        echo "<style type='text/css'>
            body{
            background-image: url('img/red.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>";
        echo "<script>
            Swal.fire({
            text: 'El color # ".$numero." es: Rojo'
        })
        </script>";
    }elseif ($numero==5) {
        echo "<style type='text/css'>
            body{
            background-image: url('img/pink.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>";
        echo "<script>
            Swal.fire({
            text: 'El color # ".$numero." es: Rosado'
        })
        </script>";
    }elseif ($numero==6) {
        echo "<style type='text/css'>
            body{
            background-image: url('img/gray.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>";
        echo "<script>
            Swal.fire({
            text: 'El color # ".$numero." es: Gris'
        })
        </script>";
    }elseif ($numero==7) {
        echo "<style type='text/css'>
            body{
            background-image: url('img/purple.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>";
        echo "<script>
            Swal.fire({
            text: 'El color # ".$numero." es: Morado'
        })
        </script>";
    }else{
        echo "<script>
            Swal.fire({
            text: 'No se encuentra opción'
        })
        </script>";
    }
}


?>
</body>
</html>
