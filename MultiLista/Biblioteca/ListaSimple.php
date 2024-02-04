<?php
include("NodoSimple.php");
class ListaSimple
{
    private $nodoInicial;

    function __construct()
    {
        $this->nodoInicial = null;
    }

    /*
    * Agrega un nuevo dato a la lista, en caso de contener información previamente esta es
    * agregada al final.
    */
    function add($dato){
        $nodoNuevo = new NodoSimple($dato);
        if ($this->nodoInicial != null) {
            $nodoActual = $this->nodoInicial;
            while ($nodoActual->getSiguiente() != null) {
                $nodoActual = $nodoActual->getSiguiente();
            }
            $nodoActual->setSiguiente($nodoNuevo);
        } else {
            $this->nodoInicial = $nodoNuevo;
        }
    }

    /*
    * Retorna el objeto contenido en la posición solicitada.
    */
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

    /*
    * Retorna la posición del objeto indicado. En caso de no ser encontrado retorna -1.
    */
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

    /*
    * Elimina el objeto contenido en la posición especificada.
    */
    function deleteIn($posicion){
        if ($this->nodoInicial != null) {
            if ($posicion == 0) {
                $this->nodoInicial = $this->nodoInicial->getSiguiente();
            } else {
                $nodoActual = $this->nodoInicial->getSiguiente();
                $nodoPrevio = $this->nodoInicial;
                $posicionActual = 1;
                while ($nodoActual != null) {
                    if ($posicionActual == $posicion) {
                        $nodoPrevio->setSiguiente($nodoActual->getSiguiente());
                    }
                    $nodoPrevio = $nodoActual;
                    $nodoActual = $nodoActual->getSiguiente();
                    $posicionActual += 1;
                }
            }
        }
    }

    /*
    * Elimina la primera coincidencia con el dato indicado.
    */
    function delete($dato){
        if ($this->nodoInicial != null) {
            if ($this->nodoInicial->getDato() == $dato) {
                $this->nodoInicial = $this->nodoInicial->getSiguiente();
            } else {
                $nodoActual = $this->nodoInicial->getSiguiente();
                $nodoPrevio = $this->nodoInicial;
                while($nodoActual != null) {
                    if ($nodoActual->getDato() == $dato) {
                        $nodoPrevio->setSiguiente($nodoActual->getSiguiente());
                    }
                    $nodoPrevio = $nodoActual;
                    $nodoActual = $nodoActual->getSiguiente();
                }
            }
        }
    }

    /*
    * Elimina todo el contenido de la lista.
    */
    function cleanUp(){
        $this->nodoInicial = null;
    }

    /*
    * Retorna información de la lista, si está vacía o no.
    */
    function isEmpty(){
        return $this->nodoInicial == null;
    }

    /*
    * Retorna la longitud de la lista.
    */
    function lenght(){
        $nodoActual = $this->nodoInicial;
        $cantidadElementos = 0;
        while ($nodoActual != null) {
            $cantidadElementos += 1;
            $nodoActual = $nodoActual->getSiguiente();
        }
        return $cantidadElementos;
    }

    /*
    * Retorna true si el objeto indicado está en la lista, de lo contrario retorna false.
    */
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

    /*
    * Retorna la información contenida en la lista como un String.
    */
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
