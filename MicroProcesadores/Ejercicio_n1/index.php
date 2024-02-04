<!doctype html>
<html lang="en">
  <head>
  	<title>Ejercicio N1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.all.min.js" integrity="sha512-IZ95TbsPTDl3eT5GwqTJH/14xZ2feLEGJRbII6bRKtE/HC6x3N4cHye7yyikadgAsuiddCY2+6gMntpVHL1gHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="contact-wrap w-100 p-lg-5 p-4">
									<h3 class="mb-4">Conversiónes</h3>
									<form method="POST" action="index.php" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-control">
													<input type="text" class="form-control" name="pesocal" placeholder="Peso en gramo" required autocomplete="off">
												</div>
											</div>
											<div class="col-md-12">
													<select class="form-control" name="operacion">
  														<option value="libra">Libras</option>
  														<option value="kg">Kilogramos</option>
  														<option value="mg">Miligramos</option>
  														<option value="onza">Onzas</option>
													</select>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Calcular" class="btn btn-primary" name="calpeso">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-lg-5 p-4 img">
									<h3>Operaciones de conversión</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<i class="fa fa-check"></i>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Libras</span></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<i class="fa fa-check"></i>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Kilogramos</span></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<i class="fa fa-check"></i>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Miligramos</span></a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<i class="fa fa-check"></i>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Onzas</span></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php

if (isset($_POST["calpeso"])) {

	if ($_REQUEST["operacion"] == "libra") {

	$peso=$_POST["pesocal"];

	$formula=$peso*(1/453.592);
	$result = strval($formula);
	echo "<script>
    Swal.fire({
    text: '".$peso."g equivale a: ".$result."lb'
    })
    </script>";
    
	}elseif ($_REQUEST["operacion"] == "kg") {
	$peso=$_POST["pesocal"];

	$formula=$peso*(0.001/1);
	$result = strval($formula);
	echo "<script>
    Swal.fire({
    text: '".$peso."g equivale a: ".$result."Kg'
    })
    </script>";

	}elseif ($_REQUEST["operacion"] == "mg") {
	$peso=$_POST["pesocal"];

	$formula=$peso*(1/0.001);
	$result = strval($formula);
	echo "<script>
    Swal.fire({
    text: '".$peso."g equivale a: ".$result."mg'
    })
    </script>";

	}elseif ($_REQUEST["operacion"] == "onza") {
	$peso=$_POST["pesocal"];

	$formula=$peso*(1/28.3495);
	$result = strval($formula);
	echo "<script>
    Swal.fire({
    text: '".$peso."g equivale a: ".$result."oz'
    })
    </script>";

	}
}

?>
</body>
</html>

