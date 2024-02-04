<?php
include("ListaSimple.php");
class Editorial
{
    private $id;
    private $nombre;
    private $librosPublicados;

    function __construct($id, $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->librosPublicados = new ListaSimple();
    }

    function agregarLibro($libro)
    {
        $this->librosPublicados->add($libro);
    }

    function getLibro($posicion)
    {
        return $this->librosPublicados->get($posicion);
    }

    function buscarLibro($idLibro)
    {
        for ($i = 0; $i < $this->librosPublicados->lenght(); $i++) {
            $libroActual = $this->librosPublicados->get($i);
            if ($libroActual->getId() == $idLibro) {
                return $libroActual;
            }
        }
        return null;
    }

    function eliminarLibro($idLibro)
    {
        $libro = $this->buscarLibro($idLibro); 
        if ($libro != null) {
            $this->librosPublicados->delete($libro);
        }
    }

    function isEmpty()
    {
        return $this->getCantidadLibros() == 0;
    }

    function getCantidadLibros()
    {
        return $this->librosPublicados->lenght();
    }

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->mombre = $nombre;
    }

    function getLibrosPublicados()
    {
        return $this->librosPublicados;
    }

    function setLibrosPublicados($librosPublicados)
    {
        $this->librosPublicados = $librosPublicados;
    }

    function __toString(){
        return "" . $this->id . "|<b>-</b>|" ."<b>Nombre:</b> ". $this->nombre."|";
    }
}
