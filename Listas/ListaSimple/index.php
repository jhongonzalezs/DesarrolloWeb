<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas Simple</title>
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
            <form action="metodoslista.php" method="POST">
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
                <input type="submit" class="btn" value="Agregar">
            </form>
        </div>

        <div class="login-container2">
            <form action="metodoslista.php" method="POST">
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
                <input type="submit" class="btn" value="Agregar">
            </form>
        </div>


        <div class="login-container3">
            <form action="metodoslista.php" method="POST">
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
                <input type="submit" class="btn" value="Eliminar">
            </form>
        </div>


        <div class="login-container4">
            <form action="vaciar.php" method="POST">
                <h2>Eliminar lista</h2>
                <p>Listas Simplemente Enlazadas</p>
                <input type="submit" class="btn" value="Borrar">
            </form>
        </div>


        <div class="login-container5">
            <form action="metodoslista.php" method="POST">
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
                <input type="submit" class="btn" value="Buscar">
            </form>
        </div>

        <div class="login-container6">
            <form action="MostrarLista.php" method="POST">
                <h2>Mostrar lista de nodos</h2>
                <p>Listas Simplemente Enlazadas</p>
                <input type="submit" class="btn" value="Mostrar">
            </form>
        </div>
    </div>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>