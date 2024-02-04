<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio N4</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>La media de los números pares</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="num1" id="nome" class="inputUser" required autocomplete="off">
                    <label for="nome" class="labelInput">Numero1</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="num2" id="email" class="inputUser" required autocomplete="off">
                    <label for="email" class="labelInput">Numero2</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num3" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero3</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num4" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero4</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num5" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero5</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num6" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero6</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num7" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero7</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num8" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero8</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num9" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero9</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="num10" id="telefone" class="inputUser" required autocomplete="off">
                    <label for="telefone" class="labelInput">Numero10</label>
                </div>
                <input type="submit" name="calculo" id="submit" value="Calcular">
            </fieldset>
        </form>
    </div>

    <?php
        if (isset($_POST["calculo"])) {
            $n1 = $_POST["num1"];
            $n2 = $_POST["num2"];
            $n3 = $_POST["num3"];
            $n4 = $_POST["num4"];
            $n5 = $_POST["num5"];
            $n6 = $_POST["num6"];
            $n7 = $_POST["num7"];
            $n8 = $_POST["num8"];
            $n9 = $_POST["num9"];
            $n10 = $_POST["num10"];
            $elementos = array($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10);
            $long = count($elementos);
            $suma = 0;
            $cant=0;
            for ($i=0; $i < $long; $i++) { 
                if ($i%2==0) {
                    $suma = $suma + $elementos[$i];
                    $cant=$cant+1;
                }
            }
            $media = $suma/$cant;
            echo "<script>
                Swal.fire({
                text: 'La media es: ".$media."'
                })
            </script>";
        }
    ?>
</body>
</html>