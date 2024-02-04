<?php

include("NodoDoble.php");
//Clase Lista Doblemente Enlazada
class ListaDoble{
	//Atributos
	private $nodoInicial;
    private $nodoFinal;

    //Constructor
    function __construct(){
		$this->nodoInicial=null;
		$this->nodoFinal=null;
	}

	//Metodos

    //Agregar Nodo al Inicio de la lista
	function AddStart($elemento){
		if ($this->nodoInicial != null) {
            $elemento->setSig($this->nodoInicial);
            $this->nodoInicial->setAnt($elemento);
            $this->nodoInicial = $elemento;
        } else {
            $this->nodoInicial = $this->nodoFinal = $elemento;
        }	
	}

    //Agregar Nodo al final de la lista
	function AddEnd($elemento){
		
        if ($this->nodoInicial != null) {
            $actual = $this->nodoInicial;
            while ($actual->getSig() != null) {
                $actual = $actual->getSig();
            }
            $elemento->setAnt($actual);
            $actual->setSig($elemento);
        } else {
            $this->nodoInicial = $this->nodoFinal = $elemento;
        }
	}


    //Eliminar el primer nodo de la lista en ser hallado
	function Remove($elemento) {
	    if ($this->nodoInicial != null && $this->nodoFinal !=null) {
            if ($this->nodoInicial->getDato() == $elemento) {
                if ($this->nodoInicial->getSig() != null) {
                    $this->nodoInicial->getSig()->setAnt(null);
                }
                $this->nodoInicial = $this->nodoInicial->getSig();
            } elseif ($this->nodoFinal->getDato() == $elemento) {
                $actual = $this->nodoInicial->getSig();
                $previo = $this->nodoInicial;
                while ($actual != null) {
                    $previo = $actual;
                    $actual = $actual->getSig();
                }
                $previo->setSig(null);
            } else {
                $actual = $this->nodoInicial->getSig();
                $previo = $this->nodoInicial;
                while($actual->getSig() != null) {
                    if ($actual->getDato() == $elemento) {
                        $previo->setSig($actual->getSig());
                    }
                    $previo = $actual;
                    $actual = $actual->getSig();
                }
            }
        }
	}

    //Buscar Nodo en la lista doble
    function Search($elemento){
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

    //Elimina mi listaDoble
    function vaciarListaDoble(){
        $this->nodoInicial = $this->nodoFinal = null;
    }

    //Mostrar Lista Doblemente Enlazada
	function ShowList(){

		$actual = $this->nodoInicial;
		$Mensaje = "";

		if ($this->nodoInicial==null) {
			return "Lista Vacia";
		}else{
			while ($actual != null) {
				$Mensaje = $Mensaje."|".$actual->getDato()."|<=>";
				$actual = $actual->getSig();
			}
		}

		return $Mensaje;
		
	}


}


?>