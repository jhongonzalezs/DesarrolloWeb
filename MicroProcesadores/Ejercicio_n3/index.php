<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio N3</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<hgroup>
  <h1>Par o Impar</h1>
</hgroup>
<form method="POST" action="index.php">
  <div class="group">
    <input type="text" name="valor" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
    <label>Digitar numero</label>
  </div>
  <input type="submit" value="Verificar" class="button buttonBlue" name="validar">
</form>

<?php
if (isset($_POST["validar"])) {
	$numero = $_POST["valor"];
	if ($numero>=0) {
	if ($numero%2==0) {
	echo "<script>
    Swal.fire({
    text: 'Este numero es Par'
    })
    </script>";
	}else{
	echo "<script>
    Swal.fire({
    text: 'Este numero es Impar'
    })
    </script>";
	}
	}else{
		echo "<script>
    Swal.fire({
    text: 'Solamente numeros positivos'
    })
    </script>";
	}
}


?>
</body>
</html>
