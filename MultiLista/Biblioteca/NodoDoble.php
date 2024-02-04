<?php
class NodoDoble {
    private $dato;
    private $siguiente;
    private $anterior;

    function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
        $this->anterior = null;
    }

    function getDato()
    {
        return $this->dato;
    }

    function setDato($dato): void
    {
        $this->dato = $dato;
    }

    function getSiguiente()
    {
        return $this->siguiente;
    }

    function setSiguiente($siguiente)
    {
        $this->siguiente = $siguiente;
    }

    function getAnterior()
    {
        return $this->anterior;
    }

    function setAnterior($anterior)
    {
        $this->anterior = $anterior;
    }
}
?>