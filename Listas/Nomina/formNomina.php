<?php
include_once("Nominas.php");
include_once("Empleados.php");
session_start();
if (!isset($_SESSION["nomina"])) {
    $_SESSION["nomina"] = new Nomina();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomina</title>
    <!--styles CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--script kit Font-Awesome -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="img/logoInicio.png">
</head>

<body>
    <div class="container">
        <div class="login-container">
            <form action="metodosNomina.php" method="POST">
                <h2>Nomina</h2>
                <p>Listas Simplemente Enlazadas</p>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Nombres</h5>
                        <input class="input" type="text" name="name" autocomplete="off">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <h5>Apellidos</h5>
                        <input class="input" type="text" name="lastname" autocomplete="off">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-sort-numeric-up-alt"></i>
                    </div>
                    <div>
                        <h5>Edad</h5>
                        <input class="input" type="text" name="age" autocomplete="off">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-id-card"></i>
                    </div>
                    <div>
                        <h5>Identificacion</h5>
                        <input class="input" type="text" name="id" autocomplete="off">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-city"></i>
                    </div>
                    <div>
                        <h5>Ciudad/Pueblo</h5>
                        <input class="input" type="text" name="location" autocomplete="off">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                       <i class="fas fa-user-tie"></i>
                    </div>
                    <div>
                        <h5>Cargo</h5>
                        <input class="input" type="text" name="cargo" autocomplete="off">
                    </div>
                </div>
                <input type="submit" name="save" class="btn" value="Agregar Empleado">
                <input type="submit" name="delete" class="btn" value="Eliminar Empleado">
                <input type="submit" name="clean" class="btn" value="Limpiar Lista">
            </form>
        </div>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>