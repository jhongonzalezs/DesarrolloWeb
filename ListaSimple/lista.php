<?php

include("nodo.php");

class ListaSimple {
	private $nodoInicial;
	private $nodoFinal;

	function __construct(){
		$this->nodoInicial=null;
		$this->nodoFinal=null;
	}

	function AgregarAlInicio($elemento){
		if ($this->nodoInicial==null) {
			$this->nodoFinal= $elemento;
		}else{
			$elemento->setSig($this->nodoInicial);
		}
		$this->nodoInicial = $elemento;
	}


	function AgregarAlFinal($elemento){
		if ($this->nodoInicial==null) {
			$this->nodoInicial= $elemento;
		}else{
			$this->nodoFinal->setSig($elemento);
		}
		$this->nodoFinal = $elemento;
	}

	function Buscar($elemento){
		if ($this->nodoInicial==null) {
			return "Lista Vacia";
		}else{
			$actual = $this->nodoInicial;
			$resultado = False;

			while ($actual != null && $resultado==False) {
				if ($actual->getDato()==$elemento) {
					$resultado = True;
				}else{
					$actual=$actual->getSig();
				}
			}
			return $actual;
		}
	}

	function Eliminar($elemento) {
	    if ($this->nodoInicial==null) {
			return "Lista Vacia";
		}else{
			$actual=$this->nodoInicial;
			$anterior = $actual;
			$resultado = false;
			$eliminar = false;

			while ($actual != null && $resultado==False) {
				if ($actual->getDato()==$elemento) {
					$resultado = True;
				}else{
					$anterior = $actual;
					$actual=$actual->getSig();
				}
			}

			if ($actual==null) {
				$eliminar = false;
			}else{
				if ($actual==$this->nodoInicial) {
					$this->nodoInicial=$this->nodoInicial->getSig();
					if ($actual==$this->nodoFinal) {
						$this->nodoFinal = null;
					}
				}else{
					$anterior->setSig($actual->getSig());
					if ($actual == $this->nodoFinal) {
					$this->nodoFinal=$anterior;
					}
				}
				$actual=null;
				$eliminar = true;
			}
			return $eliminar;
		}
	}

	function vaciarLista(){
		if ($this->nodoInicial==null) {
				return false;
		}else{
			$this->nodoInicial = null;
			return true;
		}
  }

    function longitud(){
        $actual = $this->nodoInicial;
        $cantidadElementos = 0;
        while ($actual != null) {
            $cantidadElementos += 1;
            $actual = $actual->getSig();
        }
        return $cantidadElementos;
    }

	function MostrarLista(){
		$actual = $this->nodoInicial;
		$Mensaje = "";

		if ($this->nodoInicial==null) {
			return "Lista Vacia";
		}else{
			while ($actual != null) {
				$Mensaje = $Mensaje."|".$actual->getDato()."|¬>";
				$actual = $actual->getSig();
			}
		}

		return $Mensaje;
	}
}


?>
