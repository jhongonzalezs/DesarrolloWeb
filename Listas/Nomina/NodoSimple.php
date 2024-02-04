<?php
class NodoSimple
{
    private $dato;
    private $siguiente;

    function __construct($dato)
    {
        $this->dato = $dato;
        $this->siguiente = null;
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
}
