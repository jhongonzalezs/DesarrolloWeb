<?php
include_once("Grafo.php");
session_start();
if (!isset($_SESSION["grafo"])) {
    $_SESSION["grafo"] = new Grafo();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafos</title>
    <!--styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--script kit Font-Awesome -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="img/logoInicio.png">

    <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <form action="index.php" method="POST">
                <h2>Agregar Nodo</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div>
                        <h5>ID</h5>
                        <input class="input" type="text" name="IDnodo" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnNuevo" class="btn" value="Agregar Nodo">
            </form>
        </div>

        <div class="login-container2">
            <form action="index.php" method="POST">
                <h2>Agregar Conexion</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div>
                        <h5>ID nodo origen</h5>
                        <input class="input" type="text" name="IDorigen" autocomplete="off" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                    <div>
                        <h5>ID nodo destino</h5>
                        <input class="input" type="text" name="IDdestino" autocomplete="off" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-route"></i>
                    </div>
                    <div>
                        <h5>Distancia</h5>
                        <input class="input" type="text" name="peso" autocomplete="off">
                    </div>
                </div>
                <input type="submit" name="btnConexion" class="btn" value="Agregar Conexion">
            </form>
        </div>

        <div class="login-container3">
            <form action="index.php" method="POST">
                <h2>Eliminar Nodo</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div>
                        <h5>ID Nodo a eliminar</h5>
                        <input class="input" type="text" name="IDnodo" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnDelecteNodo" class="btn" value="Eliminar Nodo">
            </form>
        </div>


        <div class="login-container4">
            <form action="index.php" method="POST">
                <h2>Eliminar Conexion</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div>
                        <h5>ID nodo origen</h5>
                        <input class="input" type="text" name="IDorigen" autocomplete="off" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                    <div>
                        <h5>ID nodo destino</h5>
                        <input class="input" type="text" name="IDdestino" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnDeleteConexion" class="btn" value="Eliminar Conexion">
            </form>
        </div>


        <div class="login-container5">
            <form action="index.php" method="POST">
                <h2>Mostrar Nodo</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div>
                        <h5>ID </h5>
                        <input class="input" type="text" name="IDnodo" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnShowNodo" class="btn" value="Mostrar Nodo">
            </form>
        </div>


        <div class="login-container6">
            <form action="index.php" method="POST">
                <h2>Mostrar Nodos Adyacentes</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div>
                        <h5>ID Nodo</h5>
                        <input class="input" type="text" name="IDnodo" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnShowAdya" class="btn" value="Mostrar Adyacentes">
            </form>
        </div>


        <div class="login-container6">
            <form action="index.php" method="POST">
                <h2>Mostrar Grados</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div>
                        <h5>ID Nodo</h5>
                        <input class="input" type="text" name="IDnodo" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnShowGrados" class="btn" value="Mostrar Grados">
            </form>
        </div>

        <div class="login-container7">
            <form action="index.php" method="POST">
                <h2>Búsqueda en Anchura (BFS)</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div>
                        <h5>ID Nodo</h5>
                        <input class="input" type="text" name="IDnodo" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnBFS" class="btn" value="Mostrar Anchura">
            </form>
        </div>


        <div class="login-container8">
            <form action="index.php" method="POST">
                <h2>Búsqueda en Profundidad (DFS)</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                    <div>
                        <h5>ID Nodo</h5>
                        <input class="input" type="text" name="IDnodo" autocomplete="off" required>
                    </div>
                </div>
                <input type="submit" name="btnDFS" class="btn" value="Mostrar Profundidad">
            </form>
        </div>


        <div class="login-container9">
            <form action="index.php" method="POST">
                <h2>Camino más corto</h2>
                <p>Grafos</p>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div>
                        <h5>ID Nodo Comienzo</h5>
                        <input class="input" type="text" name="IDnodoC" autocomplete="off" required>
                    </div>
                </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-fingerprint"></i>
                    </div>
                    <div>
                        <h5>ID Nodo Finalizar</h5>
                        <input class="input" type="text" name="IDnodoF" autocomplete="off" required>
                    </div>
                </div>

                <input type="submit" name="btnCortos" class="btn" value="Mostrar Camino">
            </form>
        </div>


    </div>



    <!--Aqui va el codigo de cada button-->
    <?php

    include_once("Conexion.php");
    //Aqui va el codigo de añadir nodo
    if (isset($_POST["btnNuevo"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        //Creo Mi nodo
        $Id = $_POST["IDnodo"];
        //Añado al final de la lista el nodo
        $vertice = new Vertice($Id);
        $_SESSION["grafo"]->agregarVertice($vertice);
    }

    //Agregar conexión
    if (isset($_POST["btnConexion"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        //Creo Mi nodo
        $Destino = $_POST["IDdestino"];
        $Origen = $_POST["IDorigen"];
        $peso = $_POST["peso"];

        if ($peso != "") {
            $consulta = $_SESSION["grafo"]->agregarArista($Origen, $Destino, $peso);
            if ($consulta == false) {
                echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'ERROR...',
                text: 'Conexion No Valida'
            })
            </script>";
            }
        } else {
            $consulta = $_SESSION["grafo"]->agregarArista($Origen, $Destino);
            if ($consulta == false) {
                echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'ERROR...',
                text: 'Conexion No Valida'
            })
            </script>";
            }
        }
    }


    //Eliminar nodo
    if (isset($_POST["btnDelecteNodo"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        $Id = $_POST["IDnodo"];
        $consulta = $_SESSION["grafo"]->eliminarVertice($Id);
        if ($consulta == false) {
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'EL NODO NO EXISTE'
            })
            </script>";
        }
    }


    //Eliminar conexión
    if (isset($_POST["btnDeleteConexion"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        //Creo Mi nodo
        $Destino = $_POST["IDdestino"];
        $Origen = $_POST["IDorigen"];

        $consulta = $_SESSION["grafo"]->eliminarArista($Origen, $Destino);

        if ($consulta == false) {
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'LA CONEXION NO EXISTE'
            })
            </script>";
        }
    }


    //Mostrar nodo
    if (isset($_POST["btnShowNodo"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        $Id = $_POST["IDnodo"];
        $vertice = $_SESSION["grafo"]->getVertice($Id);
        if (isset($vertice)) {
            echo "<script>
                Swal.fire({
                title: 'El Nodo indicado es " . $vertice . "'
            })
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'NODO NO ENCONTRADO'
            })
            </script>";
        }
    }


    //Mostrar Adyacentes
    if (isset($_POST["btnShowAdya"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        $Id = $_POST["IDnodo"];
        $verticesAdyacentes = $_SESSION["grafo"]->getVerticesAdyacentes($Id);
        //verticesAdyacentes
        if (isset($verticesAdyacentes)) {
            echo "<br>Los <b>Vertices Adyacentes</b> del Nodo <b>" . $Id . "</b> Son: <b>" . $verticesAdyacentes . "</b>";
        } else {
            echo "<br>EL NODO <b>" . $Id . "</b> No Tiene Vertices Adyacentes.";
        }
    }




    //Mostrar Grados
    if (isset($_POST["btnShowGrados"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        $Id = $_POST["IDnodo"];
        $grado = $_SESSION["grafo"]->grado($Id);
        $gradoEntrada = $_SESSION["grafo"]->gradoEntrada($Id);
        $gradoSalida = $_SESSION["grafo"]->gradoSalida($Id);

        //Mostrar Total de grados del nodo
        if (isset($grado)) {
            echo "<br>El <b>grado total</b> del Nodo <b>" . $Id . "</b> Es: <b>" . $grado . "</b>";
        } else {
            echo "<br>EL NODO <b>" . $Id . "</b> No Tiene Grados.";
        }


        //Mostrar grados de entrada del nodo
        if (isset($gradoEntrada)) {
            echo "<br>El <b>grado de entrada</b> del Nodo <b>" . $Id . "</b> Es: <b>" . $gradoEntrada . "</b>";
        } else {
            echo "<br>EL NODO <b>" . $Id . "</b> No Tiene Grados De Entradas.";
        }


        //Mostrar grados de salida del nodo
        if (isset($gradoEntrada)) {
            echo "<br>El <b>grado de salida</b> del Nodo <b>" . $Id . "</b> Es: <b>" . $gradoSalida . "</b>";
        } else {
            echo "<br>EL NODO <b>" . $Id . "</b> No Tiene Grados De Salida.";
        }
    }


    //BFS
    if (isset($_POST["btnBFS"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        $Id = $_POST["IDnodo"];
        $recorrido = $_SESSION["grafo"]->BFS($Id);
        if (isset($recorrido)) {
            echo "<h2> <b>Recorrido De Anchura: </b>";
            foreach ($recorrido as $vertice) {
                echo "<I><u>" . $vertice . "->";
            }
            echo "end";
        } else {
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Vertice raíz no encontrado'
            })
            </script>";
        }
    }


    //DFS
    if (isset($_POST["btnDFS"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        $Id = $_POST["IDnodo"];
        $recorrido = $_SESSION["grafo"]->DFS($Id);
        if (isset($recorrido)) {
            echo "<h2> <b>Recorrido De Profundidad: </b>";
            foreach ($recorrido as $vertice) {
                echo "<I><u>" . $vertice . "->";
            }
            echo "Fin";
        } else {
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Vertice raíz no encontrado'
            })
            </script>";
        }
    }


    //Caminos Cortos
    if (isset($_POST["btnCortos"])) {
        if (isset($_SESSION["grafo"]) == false) {
            $_SESSION["grafo"] = new Grafo();
        }
        $Idinicio = $_POST["IDnodoC"];
        $Idfin = $_POST["IDnodoF"];
        $caminoMasCorto = $_SESSION["grafo"]->caminoMasCorto($Idinicio, $Idfin);
        if (isset($caminoMasCorto)) {
            print_r($caminoMasCorto);
            echo "<h3><i>El camino más corto para llegar a <b>" . $Idfin . "</b> desde <b>" . $Idinicio . "</b> es:" . "<br>Inicio->";
            foreach ($caminoMasCorto as $vertice) {
                echo $vertice . "->";
            }
            echo "Fin</i>";
        } else {
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Oops... No es posible crear un Camino',
                text: 'Verifique e intente nuevamente'
            })
            </script>";
        }
    }


    ?>





    <!--Mostrar Grafo-->
    <div id="mynetwork" class=mynetwork>
        <script type="text/javascript">
            var vertices = new vis.DataSet([
                <?php
                $vertices = $_SESSION["grafo"]->getVertices();
                foreach ($vertices as $id => $vertice) {
                    echo "{id: '$id', label: '$id',},";
                }
                ?>
            ]);

            var aristas = new vis.DataSet([
                <?php
                $aristas = $_SESSION["grafo"]->getAristas();
                if (isset($aristas)) {
                    foreach ($aristas as $vertice => $aristasDelVertice) {
                        if (isset($aristasDelVertice)) {
                            foreach ($aristasDelVertice as $destino => $peso) {
                                if (isset($caminoMasCorto[$vertice])) {
                                    if ($caminoMasCorto[$vertice] == $destino) {
                                        echo "{from: '$vertice', to: '$destino', label: '$peso', color: { color: 'red'},},";
                                    } else {
                                        echo "{from: '$vertice', to: '$destino', label: '$peso'},";
                                    }
                                } else {
                                    echo "{from: '$vertice', to: '$destino', label: '$peso'},";
                                }
                            }
                        }
                    }
                }

                ?>
            ]);

            var container = document.getElementById("mynetwork");
            var data = {
                nodes: vertices,
                edges: aristas,
            };
            var options = {
                autoResize: true,
                height: '100%',
                width: '100%',
                locale: 'es',
                edges: {
                    arrows: {
                        to: {
                            enabled: true,
                            imageHeight: undefined,
                            imageWidth: undefined,
                            scaleFactor: 1,
                            src: undefined,
                            type: "arrow"
                        },
                    },
                },
                nodes: {
                    color: '#33FFA8',
                    fixed: false,
                    font: {
                        color: '#060606',
                        size: 20,
                    },
                    scaling: {
                        label: true
                    },
                },
            }
            var network = new vis.Network(container, data, options);
        </script>
    </div>


    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>