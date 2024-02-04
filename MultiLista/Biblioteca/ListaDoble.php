<?php
include("NodoDoble.php");
class ListaDoble
{
    private $nodoInicial;
    private $nodoFinal;

    function __construct(){
        $this->nodoInicial = null;
        $this->nodoFinal = null;
    }

    function addFirst($dato){
        $nodoNuevo = new NodoDoble($dato);
        if ($this->nodoInicial != null) {
            $nodoNuevo->setSiguiente($this->nodoInicial);
            $this->nodoInicial->setAnterior($nodoNuevo);
            $this->nodoInicial = $nodoNuevo;
        } else {
            $this->nodoInicial = $this->nodoFinal = $nodoNuevo;
        }
    }

    function addLast($dato){
        $nodoNuevo = new NodoDoble($dato);
        if ($this->nodoInicial != null) {
            $nodoActual = $this->nodoInicial;
            while ($nodoActual->getSiguiente() != null) {
                $nodoActual = $nodoActual->getSiguiente();
            }
            $nodoNuevo->setAnterior($nodoActual);
            $nodoActual->setSiguiente($nodoNuevo);
        } else {
            $this->nodoInicial = $this->nodoFinal = $nodoNuevo;
        }
    }

    function get($posicion){
        if (!$this->isEmpty()) {
            $nodoActual = $this->nodoInicial;
            $posicionActual = 0;
            while ($nodoActual != null) {
                if ($posicionActual == $posicion) {
                    return $nodoActual->getDato();
                }
                $nodoActual = $nodoActual->getSiguiente();
                $posicionActual += 1;
            }
            return null;
        } else {
            return null;
        }
    }

    function getPosition($dato){
        if (!$this->isEmpty()) {
            $nodoActual = $this->nodoInicial;
            $posicionActual = 0;
            while ($nodoActual != null) {
                if ($nodoActual->getDato() == $dato) {
                    return $posicionActual;
                }
                $nodoActual = $nodoActual->getSiguiente();
                $posicionActual += 1;
            }
            return -1;
        } else {
            return -1;
        }
    }

    
    function deleteIn($posicion){
        if ($this->nodoInicial != null) {
            if ($posicion == 0) {
                $this->nodoInicial = $this->nodoInicial->getSiguiente();
                $this->nodoInicial->setAnterior(null);
            } elseif ($posicion == $this->lenght()-1) {
                $nodoActual = $this->nodoInicial->getSiguiente();
                $nodoPrevio = $this->nodoInicial;
                while ($nodoActual->getSiguiente() != null) {
                    $nodoPrevio = $nodoActual;
                    $nodoActual = $nodoActual->getSiguiente();
                }
                $nodoPrevio->setSiguiente($nodoActual->getSiguiente());
                $this->nodoFinal = $nodoPrevio;
            } else {
                $nodoActual = $this->nodoInicial->getSiguiente();
                $nodoPrevio = $this->nodoInicial;
                $posicionActual = 1;
                while ($nodoActual->getSiguiente() != null) {
                    if ($posicionActual == $posicion) {
                        $nodoActual->getSiguiente()->setAnterior($nodoPrevio);
                        $nodoPrevio->setSiguiente($nodoActual->getSiguiente());
                    }
                    $nodoPrevio = $nodoActual;
                    $nodoActual = $nodoActual->getSiguiente();
                    $posicionActual += 1;
                }
            }
        }
    }

    function delete($dato){
        if ($this->nodoInicial != null && $this->nodoFinal !=null) {
            if ($this->nodoInicial->getDato() == $dato) {
                if ($this->nodoInicial->getSiguiente() != null) {
                    $this->nodoInicial->getSiguiente()->setAnterior(null);
                }
                $this->nodoInicial = $this->nodoInicial->getSiguiente();
            } elseif ($this->nodoFinal->getDato() == $dato) {
                $nodoActual = $this->nodoInicial->getSiguiente();
                $nodoPrevio = $this->nodoInicial;
                while ($nodoActual != null) {
                    $nodoPrevio = $nodoActual;
                    $nodoActual = $nodoActual->getSiguiente();
                }
                $nodoPrevio->setSiguiente(null);
            } else {
                $nodoActual = $this->nodoInicial->getSiguiente();
                $nodoPrevio = $this->nodoInicial;
                while($nodoActual->getSiguiente() != null) {
                    if ($nodoActual->getDato() == $dato) {
                        $nodoPrevio->setSiguiente($nodoActual->getSiguiente());
                    }
                    $nodoPrevio = $nodoActual;
                    $nodoActual = $nodoActual->getSiguiente();
                }
            }
        }
    }

    function cleanUp(){
        $this->nodoInicial = $this->nodoFinal = null;
    }

    function contains($dato){
        if (!$this->isEmpty()) {
            $nodoActual = $this->nodoInicial;
            while ($nodoActual != null) {
                if ($nodoActual->getDato() == $dato) {
                    return true;
                }
                $nodoActual = $nodoActual->getSiguiente();
            }
            return false;
        } else {
            return false;
        }
    }


    function isEmpty(){
        return $this->nodoInicial == null;
    }

    function lenght(){
        $nodoActual = $this->nodoInicial;
        $cantidadElementos = 0;
        while ($nodoActual != null) {
            $cantidadElementos += 1;
            $nodoActual = $nodoActual->getSiguiente();
        }
        return $cantidadElementos;
    }

    function __toString(){
        if ($this->nodoInicial != null) {
            $listaString = "[";
            $nodoActual = $this->nodoInicial;
            while ($nodoActual->getSiguiente() != null) {
                $listaString .= $nodoActual->getDato() . ", ";
                $nodoActual = $nodoActual->getSiguiente();
            }
            $listaString .= $nodoActual->getDato() . "]";
            return $listaString;
        } else {
            return "[]";
        }
    }

}
