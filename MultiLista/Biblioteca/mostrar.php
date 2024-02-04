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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/mostrar.css">
    <title>Mostrar Biblioteca</title>
    <link rel="icon" href="img/logoInicio.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>

    <div class="window-notice" id="window-notice">
        <div class="content">
            <div class="content-text"><?php echo " ".$_SESSION["AdictosLectura"]->Mostrar();?>
            <a href="index.php">Regresar</a>
        </div>
        </div>
    </div>
    <script src="js/mostrar.js"></script>

</body>

</html>