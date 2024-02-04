<?php

class NodoDoble{
	//Atributos
	private $dato;
    private $siguiente;
    private $anterior;

    //Constructor
    function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
        $this->anterior = null;
    } 

    //Getters and Setters
    function getDato()
    {
        return $this->dato;
    }

    function setDato($dato): void
    {
        $this->dato = $dato;
    }

    function getSig()
    {
        return $this->siguiente;
    }

    function setSig($dato)
    {
        $this->siguiente = $dato;
    }

    function getAnt()
    {
        return $this->anterior;
    }

    function setAnt($dato)
    {
        $this->anterior = $dato;
    }
}

?>