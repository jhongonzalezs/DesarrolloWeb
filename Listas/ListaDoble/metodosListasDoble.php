<?php

include ("ListaDoble.php");
session_start();
if(isset($_SESSION["listaDoble"])==false){
    $_SESSION["listaDoble"]= new ListaDoble();
}

//$mensaje = "".$_POST["alinicio"];
if (isset($_POST["alfinal"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
    $nodo = new NodoDoble($_POST["alfinal"]);
    $_SESSION["listaDoble"]->AddEnd($nodo);

    echo "<script> alert('".$_SESSION["listaDoble"]->ShowList()."'); window.location.href='formListaDoble.php';</script>";
}

if (isset($_POST["alinicio"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
   $nodo = new NodoDoble("".$_POST["alinicio"]);
   $_SESSION["listaDoble"]->AddStart($nodo);

   echo "<script> alert('".$_SESSION["listaDoble"]->ShowList()."'); window.location.href='formListaDoble.php';</script>";
}

if (isset($_POST["eliminar"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
   $nodo = $_POST["eliminar"];
   $PruebaEliminar = $_SESSION["listaDoble"]->Remove($nodo);

    echo "<script> alert('El nodo ha sido eliminado'); window.location.href='formListaDoble.php';</script>";
}

if (isset($_POST["buscar"])) {
   //echo "<script> alert('".$mensaje."'); </script>";
   $nodo = $_POST["buscar"];
   $PruebaBuscar=$_SESSION["listaDoble"]->Search($nodo);

  if ($PruebaBuscar) {
    echo "<script> alert('El nodo encontrado es: ".$PruebaBuscar->getDato()."'); window.location.href='formListaDoble.php';</script>";
  }else{
    echo "<script> alert('El Elemento No existe'); window.location.href='formListaDoble.php';</script>";
  }
}

?>