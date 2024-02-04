<?php
class Empleado
{
    private $nombre;
    private $apellido;
    private $ciudad;
    private $edad;
    private $id;
    private $cargo;

    function __construct($nombre, $apellido, $ciudad, $edad, $id, $cargo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->ciudad = $ciudad;
        $this->edad = $edad;
        $this->id = $id;
        $this->cargo = $cargo;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    function getCiudad()
    {
        return $this->ciudad;
    }

    function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    function getEdad()
    {
        return $this->edad;
    }

    function setEdad($edad)
    {
        $this->edad = $edad;
    }

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getCargo()
    {
        return $this->cargo;
    }

    function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    function equals(Empleado $empleadoAComparar)
    {
        if (($empleadoAComparar != null) and ($this->id == $empleadoAComparar->id)) {
            return true;
        } else {
            return false;
        }
    }

    function __toString()
    {
        return $this->nombre . " " . $this->apellido . " " . $this->ciudad . " " . $this->edad .
            " " . $this->id . " " . $this->cargo;
    }
}
