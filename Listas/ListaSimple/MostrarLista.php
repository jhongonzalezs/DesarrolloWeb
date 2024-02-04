<?php

include ("lista.php");
session_start();
if(isset($_SESSION["lista"])==false){
    echo "<script> alert('NO EXISTE NINGUNA LISTA'); window.location.href='formLista.php';</script>";
}else{
	echo "<script> alert('".$_SESSION["lista"]->MostrarLista()."'); window.location.href='formLista.php';</script>";
}

?>