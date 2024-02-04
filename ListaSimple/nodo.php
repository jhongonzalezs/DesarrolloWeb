<?php

class Nodo{

	//Atributos
	private $dato;
	private $siguiente;

	//Constructor
	function __construct($dato) {
		$this->dato=$dato;
		$this->siguiente=null;
	}

	//Getters and Setters
	function getDato(){
		return $this->dato;
	}

	function setDato($dato){
		$this->dato=$dato;
	}

	function getSig(){
		return $this->siguiente;
	}

	function setSig($dato){
		$this->siguiente=$dato;
	}

}

?>