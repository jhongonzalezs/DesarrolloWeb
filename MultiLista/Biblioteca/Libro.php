<?php
class Libro
{
    private $id;
    private $nombre;
    private $autor;
    private $pais;
    private $publicationYear;
    private $cantidadStock;

    function __construct($id, $nombre, $autor, $pais, $publicationYear, $cantidadStock)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->pais = $pais;
        $this->publicationYear = $publicationYear;
        $this->cantidadStock = $cantidadStock;
    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getAutor(){
        return $this->autor;
    }

    function setAutor($autor){
        $this->autor = $autor;
    }

    function getPais(){
        return $this->pais;
    }

    function setPais($pais){
        $this->pais = $pais;
    }

    function getPublicationYear(){
        return $this->publicationYear;
    }

    function setPublicationYear($publicationYear){
        $this->publicationYear = $publicationYear;
    }
    function getCantidadStock(){
        return $this->cantidadStock;
    }

    function setCantidadStock($cantidadStock){
        $this->cantidadStock = $cantidadStock;
    }

    function __toString(){
        return "Nombre: " . $this->nombre . "<br>Año de publicación: " . $this->publicationYear;
    }
}
