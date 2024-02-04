<?php
include_once("Editorial.php");
include_once("Libro.php");
include_once("ListaDoble.php");

class Biblioteca
{
    private $biblioteca;

    function __construct()
    {
        $this->biblioteca = new ListaDoble();
    }

    function agregarEditorial($editorial){
        if ($this->buscarEditorial($editorial->getId()) == null) {
            $this->biblioteca->addLast($editorial);
            return true;
        } else {
            return false;
        }
    }

    function agregarLibro($libro, $idEditorial){
        $editorial = $this->buscarEditorial($idEditorial);
        if ($editorial != null) {
            if ($this->buscarLibro($idEditorial, $libro->getId()) == null) {
                $editorial->agregarLibro($libro);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function buscarEditorial($idEditorial){
        for ($i = 0; $i < $this->biblioteca->lenght(); $i++) {
            $editorialActual = $this->biblioteca->get($i);
            if ($editorialActual->getId() == $idEditorial) {
                return $editorialActual;
            }
        }
        return null;
    }

    function buscarLibro($idEditorial, $idLibro){
        return $this->buscarEditorial($idEditorial)->buscarLibro($idLibro);
    }

    function eliminarEditorial($idEditorial){
        $editorial = $this->buscarEditorial($idEditorial);
        if ($editorial != null) {
            $this->biblioteca->delete($editorial);
            return true;
        } else {
            return false;
        }
    }

    function vaciarBiblioteca(){
        $this->biblioteca->cleanUp();
        return true;
    }

    function eliminarLibro($idEditorial, $idLibro){
        $editorial = $this->buscarEditorial($idEditorial);
        if ($editorial != null) {
            $editorial->eliminarLibro($idLibro);
        }
    }

    function isEditorialVacia($idEditorial){
        return $this->buscarEditorial($idEditorial)->isEmpty();
    }

    function getNumLibrosPublicadosEn($publicationYear){
        $numLibrosPublicados = 0;
        for ($i = 0; $i < $this->biblioteca->lenght(); $i++) {
            $editorialActual = $this->biblioteca->get($i);
            for ($j = 0; $j < $editorialActual->getLibrosPublicados()->lenght(); $j++) {
                $libroActual = $editorialActual->getLibro($j);
                if ($libroActual->getPublicationYear() == $publicationYear) {
                    $numLibrosPublicados += 1;
                }
            }
        }
        return $numLibrosPublicados;
    }

    function getNumLibros($idEditorial){
        $editorial = $this->buscarEditorial($idEditorial);
        if ($editorial != null) {
            return $editorial->getCantidadLibros();
        } else {
            return 0;
        }
    }

    function getBiblioteca(){
        return $this->biblioteca;
    }

    function setBiblioteca($biblioteca){
        $this->biblioteca = $biblioteca;
    }

    function Mostrar(){
        $bibliotecaString = "Biblioteca: <br>";
        for ($i = 0; $i < $this->biblioteca->lenght(); $i++) {
            $editorialActual = $this->biblioteca->get($i);
            $bibliotecaString .= "<br><b>[Editorial ".($i + 1)."]= |</b><b>ID:</b> " . $editorialActual . "<b>|:</b><br>";
            for ($j = 0; $j < $editorialActual->getCantidadLibros(); $j++) {
                $libroActual = $editorialActual->getLibro($j);
                $bibliotecaString .= "<b>[Libro " . ($j + 1) . "] =" . "|</b><b>ID:</b> " . $libroActual->getId() .
                    "|<b>-</b>|<b>Titulo:</b> " . $libroActual->getNombre() . "|<b>-</b>|<b>Autor:</b> " . $libroActual->getAutor() .
                    "|<b>-</b>|<b>País:</b> " . $libroActual->getPais() . "|<b>-</b>|<b>Año:</b> " . $libroActual->getPublicationYear() .
                    "|<b>-</b>|<b>Stock:</b> " . $libroActual->getCantidadStock() . "<b>|</b><br>";
            }
        }
        return $bibliotecaString;
    }
}
