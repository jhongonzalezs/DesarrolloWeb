<?php

include ("lista.php");
session_start();
if(isset($_SESSION["lista"])==false){
    echo "<script> alert('NO EXISTE NINGUNA LISTA'); window.location.href='formLista.php';</script>";
}else{
 	$_SESSION["lista"]->vaciarLista();

 	echo "<script> alert('Lista eliminada correctamente'); window.location.href='formLista.php';</script>";
}


?>