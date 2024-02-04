<!DOCTYPE html>
<html lang="es">
<head>
	<title>Listas Simple</title>
</head>
<body>

	<h2>Listas Doble</h2>

	<?php

	include("ListaDoble.php");

	$ListaDeNodos = new ListaDoble();

	$nodo1 = new NodoDoble("Nodo 1");
	$ListaDeNodos->AddStart($nodo1);

	$nodo2 = new NodoDoble("Nodo 2");
	$ListaDeNodos->AddStart($nodo2);

	$nodo3 = new NodoDoble("Nodo 3");
	$ListaDeNodos->AddStart($nodo3);

	$nodo4 = new NodoDoble("Nodo 4");
	$ListaDeNodos->AddStart($nodo4);

	$nodo5 = new NodoDoble("Nodo 5");
	$ListaDeNodos->AddStart($nodo5);

	$nodo6 = new NodoDoble("Nodo 6");
	$ListaDeNodos->AddStart($nodo6);

	$nodo7 = new NodoDoble("Nodo 7");
	$ListaDeNodos->AddStart($nodo7);

	$nodo8 = new NodoDoble("Nodo 0");
	$ListaDeNodos->AddEnd($nodo8);

	$nodo9 = new NodoDoble("Nodo -1");
	$ListaDeNodos->AddEnd($nodo9);

	$nodo10 = new NodoDoble("Nodo -2");
	$ListaDeNodos->AddEnd($nodo10);

	$nodo11 = new NodoDoble("Nodo -3");
	$ListaDeNodos->AddEnd($nodo11);

	$nodo12 = new NodoDoble("Nodo -4");
	$ListaDeNodos->AddEnd($nodo12);

	$nodo13 = new NodoDoble("Nodo -5");
	$ListaDeNodos->AddEnd($nodo13);

	$nodo14 = new NodoDoble("Nodo -6");
	$ListaDeNodos->AddEnd($nodo14);

	$nodo15 = new NodoDoble("Nodo -7");
	$ListaDeNodos->AddEnd($nodo15);

	echo $ListaDeNodos->ShowList();
	$ListaDeNodos->Remove("Nodo -4");
	echo "<hr>".$ListaDeNodos->ShowList();

	$PruebaBuscar = $ListaDeNodos->Search("Nodo -9");

	if ($PruebaBuscar) {
		echo "<hr>El Nodo Si existe";
	}else{
		echo "<hr>El Nodo No existe";
	}

	?>

</body>
</html>