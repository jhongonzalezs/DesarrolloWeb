<?php

include ("lista.php");
session_start();
if(isset($_SESSION["lista"])==false){
    $_SESSION["lista"]= new ListaSimple();
}

//$mensaje = "".$_POST["alinicio"];
if (isset($_POST["alfinal"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
    $nodo = new Nodo($_POST["alfinal"]);
    $_SESSION["lista"]->AgregarAlFinal($nodo);

    echo "<script> alert('".$_SESSION["lista"]->MostrarLista()."'); window.location.href='formLista.php';</script>";
}

if (isset($_POST["alinicio"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
   $nodo = new Nodo("".$_POST["alinicio"]);
   $_SESSION["lista"]->AgregarAlInicio($nodo);

   echo "<script> alert('".$_SESSION["lista"]->MostrarLista()."'); window.location.href='formLista.php';</script>";
}

if (isset($_POST["eliminar"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
   $nodo = $_POST["eliminar"];
   $PruebaEliminar = $_SESSION["lista"]->Eliminar($nodo);

   if ($PruebaEliminar) {
    echo "<script> alert('El nodo ha sido eliminado'); window.location.href='formLista.php';</script>";
  }else{
    echo "<script> alert('El nodo no existe en la lista'); window.location.href='formLista.php';</script>";
  }
}

if (isset($_POST["buscar"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
   $nodo = $_POST["buscar"];
   $PruebaBuscar=$_SESSION["lista"]->Buscar($nodo);

  if ($PruebaBuscar) {
    echo "<script> alert('El nodo encontrado es: ".$PruebaBuscar->getDato()."'); window.location.href='formLista.php';</script>";
  }else{
    echo "<script> alert('El nodo no existe en la lista'); window.location.href='formLista.php';</script>";
  }
}

?>