<!DOCTYPE html>
<html lang="es">
<head>
	<title>Listas Simple</title>
</head>
<body>

	<h2>Listas Simples </h2>

	<?php

	include("lista.php");

	$ListaDeNodos = new ListaSimple();

	$nodo1 = new Nodo("Nodo 1");
	$ListaDeNodos->AgregarAlInicio($nodo1);

	$nodo2 = new Nodo("Nodo 2");
	$ListaDeNodos->AgregarAlInicio($nodo2);

	$nodo3 = new Nodo("Nodo 3");
	$ListaDeNodos->AgregarAlInicio($nodo3);

	$nodo4 = new Nodo("Nodo 4");
	$ListaDeNodos->AgregarAlInicio($nodo4);

	$nodo5 = new Nodo("Nodo 5");
	$ListaDeNodos->AgregarAlInicio($nodo5);

	$nodo6 = new Nodo("Nodo 6");
	$ListaDeNodos->AgregarAlInicio($nodo6);

	$nodo7 = new Nodo("Nodo 7");
	$ListaDeNodos->AgregarAlInicio($nodo7);

	$nodo8 = new Nodo("Nodo 0");
	$ListaDeNodos->AgregarAlFinal($nodo8);

	$nodo9 = new Nodo("Nodo -1");
	$ListaDeNodos->AgregarAlFinal($nodo9);

	$nodo10 = new Nodo("Nodo -2");
	$ListaDeNodos->AgregarAlFinal($nodo10);

	$nodo11 = new Nodo("Nodo -3");
	$ListaDeNodos->AgregarAlFinal($nodo11);

	$nodo12 = new Nodo("Nodo -4");
	$ListaDeNodos->AgregarAlFinal($nodo12);

	$nodo13 = new Nodo("Nodo -5");
	$ListaDeNodos->AgregarAlFinal($nodo13);

	$nodo14 = new Nodo("Nodo -6");
	$ListaDeNodos->AgregarAlFinal($nodo14);

	$nodo15 = new Nodo("Nodo -7");
	$ListaDeNodos->AgregarAlFinal($nodo15);

	echo $ListaDeNodos->MostrarLista();

	$PruebaBuscar = $ListaDeNodos->Buscar("Nodo -6");
	$PruebaEliminar = $ListaDeNodos->Eliminar("Nodo -7");

	if ($PruebaBuscar) {
		echo "<hr>El Nodo encontrado es: ".$PruebaBuscar->getDato();
	}else{
		echo "<p>El Nodo No existe</p>";
	}

	if ($PruebaEliminar) {
		echo "<hr>Nodo Eliminado Correctamente";
	}else{
		echo "<p>El Nodo a eliminar No existe</p>";
	}

	echo "<hr>".$ListaDeNodos->MostrarLista();

	?>

</body>
</html>