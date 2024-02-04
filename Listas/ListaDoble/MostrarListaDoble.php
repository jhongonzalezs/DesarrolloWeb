<?php

include ("ListaDoble.php");
session_start();
if(isset($_SESSION["listaDoble"])==false){
    echo "<script> alert('NO EXISTE NINGUNA LISTA'); window.location.href='formListaDoble.php';</script>";
}else{
	echo "<script> alert('".$_SESSION["listaDoble"]->ShowList()."'); window.location.href='formListaDoble.php';</script>";
}

?>