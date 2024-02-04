<?php

include ("ListaDoble.php");
session_start();
if(isset($_SESSION["listaDoble"])==false){
    echo "<script> alert('NO EXISTE NINGUNA LISTA'); window.location.href='formListaDoble.php';</script>";
}else{
 	$_SESSION["listaDoble"]->vaciarListaDoble();

 	echo "<script> alert('Lista eliminada correctamente'); window.location.href='formListaDoble.php';</script>";
}


?>