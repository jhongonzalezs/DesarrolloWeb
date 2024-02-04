<?php
require("ListaSimple.php");
require("Empleados.php");

class Nomina
{
    protected $nomina;

    function __construct()
    {
        $this->nomina = new ListaSimple();
    }

    function agregarEmpleado($empleado)
    {
        $this->nomina->add($empleado);
    }

    function EliminarEmpleado($empleado)
    {
        $this->nomina->delete($empleado);
    }

    function EliminarEmpleadoIn($posicion)
    {
        $this->nomina->deleteIn($posicion);
    }

    function LimpiarNomina()
    {
        $this->nomina->cleanUp();
    }

    function MostrarListadoEmpleados()
    {
        return $this->nomina->__toString();
    }

    function getNumEmpleadosEnNomina()
    {
        return $this->nomina->lenght();
    }
}
