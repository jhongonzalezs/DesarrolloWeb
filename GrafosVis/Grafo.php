<?php
include_once("Conexion.php");
class Grafo
{
    private $vertices;
    private $aristas;
    private $dirigido;

    public function __construct($dirigido = true)
    {
        $this->vertices = null;
        $this->aristas = null;
        $this->dirigido = $dirigido;
    }

    public function agregarVertice($vertice)
    {
        if (!isset($this->vertices[$vertice->getId()])) {
            $this->aristas[$vertice->getId()] = null;
            $this->vertices[$vertice->getId()] = $vertice;
            return true;
        } else {
            return false;
        }
    }

    public function agregarArista($idVerticeOrigen, $idVerticeDestino, $peso = 1)
    {
        if (isset($this->vertices[$idVerticeOrigen]) && isset($this->vertices[$idVerticeDestino])) {
            $this->aristas[$idVerticeOrigen][$idVerticeDestino] = $peso;
            return true;
        } else {
            return false;
        }
    }

    /*
    * Elimina el vertice indicado y las aristas que lo relacionan con el resto del grafo.
    */
    public function eliminarVertice($idVerticeEliminar)
    {
        if (isset($this->vertices[$idVerticeEliminar]) && isset($this->aristas)) {
            foreach ($this->aristas as $vertice => $aristasDelVertice) {
                if (isset($aristasDelVertice)) {
                    foreach ($aristasDelVertice as $destino => $peso) {
                        if ($destino == $idVerticeEliminar) {
                            unset($this->aristas[$vertice][$destino]);
                        }
                    }
                }
            }
            unset($this->aristas[$idVerticeEliminar]);
            unset($this->vertices[$idVerticeEliminar]);
            return true;
        } else {
            return false;
        }
    }

    /*
    * Elimina la arista entre un nodo de origen y uno de destino.
    */
    public function eliminarArista($idVerticeOrigen, $idDVerticeDestino)
    {
        if (isset($this->aristas[$idVerticeOrigen][$idDVerticeDestino])) {
            unset($this->aristas[$idVerticeOrigen][$idDVerticeDestino]);
            return true;
        } else {
            return false;
        }
    }

    /*
    * Retorna los vertices adyacentes al vertice indicado. 
    */
    public function getVerticesAdyacentes($idVertice){
        if (isset($this->aristas[$idVertice])) {
            $verticesAdyacentes = $this->aristas[$idVertice];
            print_r($verticesAdyacentes);
            if (isset($verticesAdyacentes)) {
                return count($verticesAdyacentes);
            } else {
                return 0;
            }
        } else {
            return null;
        }
    }

    /*
    * Recibe el id del vertice y retorna grado de salida del mismo.
    */
    public function gradoSalida($idVertice)
    {
        if (isset($this->aristas[$idVertice])) {
            $verticesAdyacentes = $this->aristas[$idVertice];
            if (isset($verticesAdyacentes)) {
                return count($verticesAdyacentes);
            } else {
                return 0;
            }
        } else {
            return null;
        }
    }

    /*
    * Reotrna el grado de entrada del vertice indicado.
    */
    public function gradoEntrada($idVertice)
    {
        if (isset($this->vertices[$idVertice])) {
            $grado = 0;
            if (isset($this->aristas)) {
                foreach ($this->aristas as $vertice => $aristasDelVertice) {
                    if (isset($aristasDelVertice)) {
                        foreach ($aristasDelVertice as $destino => $peso) {
                            if ($destino == $idVertice) {
                                $grado++;
                            }
                        }
                    }
                }
            }
            return $grado;
        } else {
            return null;
        }
    }

    /*
    * Retorna el grado de un vertice.
    */
    public function grado($idVertice)
    {
        $gradoSalida = $this->gradoSalida($idVertice);
        $gradoEntrada = $this->gradoEntrada($idVertice);
        if (isset($gradoSalida) || isset($gradoEntrada)) {
            return $gradoSalida + $gradoEntrada;
        } else {
            return null;
        }
    }

    /*
    * Búsqueda de anchura.
    */
    public function BFS($vertice){
        if (isset($this->vertices[$vertice])) {
            $recorrido = array();
            $visitados = $this->getVisitados();
            $cola = array();

            array_push($cola, $this->vertices[$vertice]);
            $visitados[$vertice] = true;
            while (count($cola) > 0) {
                $verticeActual = array_shift($cola);
                array_push($recorrido, $verticeActual->getId());
                if (isset($this->aristas[$verticeActual->getId()])) {
                    foreach ($this->aristas[$verticeActual->getId()] as $destino => $peso) {
                        if (!$visitados[$destino]) {
                            array_push($cola, $this->vertices[$destino]);
                            $visitados[$destino] = true;
                        }
                    }
                }
            }
            return $recorrido;
        } else {
            return null;
        }
    }

    /*
     * Búsqueda de profundidad. 
    */
    public function DFS($vertice){
        if (isset($this->vertices[$vertice])) {
            $recorrido = array();
            $visitados = $this->getVisitados();
            $pila = array();

            array_push($pila, $this->vertices[$vertice]);
            $visitados[$vertice] = true;
            while (count($pila) > 0) {
                $verticeActual = array_pop($pila);
                array_push($recorrido, $verticeActual->getId());
                if (isset($this->aristas[$verticeActual->getId()])) {
                    foreach ($this->aristas[$verticeActual->getId()] as $destino => $peso) {
                        if (!$visitados[$destino]) {
                            array_push($pila, $this->vertices[$destino]);
                            $visitados[$destino] = true;
                        }
                    }
                }
            }
            return $recorrido;
        } else {
            return null;
        }
    }



    public function caminoMasCorto($partida, $destino){
        $busquedaProfundidad = $this->DFS($partida);
        if (in_array($partida, $busquedaProfundidad) && in_array($destino, $busquedaProfundidad)) {
            if (isset($this->vertices[$partida]) && isset($this->vertices[$destino])) {
                $cola = array();
                $valoresAcumulados[$partida] = 0;
                $predecesores[$partida] = null;
                $iteraciones[$partida] = 0; 
                //Agrega el vertice de partida a la cola
                $cola[$partida] = 0;
    
                $iteracion = 0;
                while (!empty($cola)) {
                    //Busca entre los vertices etiquetado el que tenga menor valor acumulado
                    $menorAcumulado = array_search(min($cola), $cola);
                    if ($menorAcumulado == $destino) break;
                    //Para cada vertice adyacente al vertice con el menor valor acumulado
                    foreach ($this->aristas[$menorAcumulado] as $adyacente => $peso) {
                        //Verifica si está etiquetado
                        if (isset($valoresAcumulados[$adyacente])) {
                            if ($valoresAcumulados[$menorAcumulado] + $peso < $valoresAcumulados[$adyacente]) {
                                $valoresAcumulados[$adyacente] = $valoresAcumulados[$menorAcumulado] + $peso;
                                $predecesores[$adyacente] = $menorAcumulado;
                                $iteraciones[$adyacente] = $iteracion;
                                //Después es agregado a la cola
                                $cola[$adyacente] = $valoresAcumulados[$menorAcumulado] + $peso;
                            }
                        } else {
                            //Sino está etiquetado es etiquetado
                            $valoresAcumulados[$adyacente] = $valoresAcumulados[$menorAcumulado] + $peso;
                            $predecesores[$adyacente] = $menorAcumulado;
                            $iteraciones[$adyacente] = $iteracion;
                            //Después es agregado a la cola
                            $cola[$adyacente] = $valoresAcumulados[$menorAcumulado] + $peso;
                        }
                    }
                    unset($cola[$menorAcumulado]);
                    $iteracion++;
                }
    
                /*Despues de que todos los vertices fueron etiquetados se procede a marcar
            el camino más corto*/
				$caminoMasCorto = array();
				/*Predecesor toma los valores de los vertices predecesores al vertice destino hasta
            llegar al vertice de partida*/
				$predecesor = $destino;
				while ($predecesor != $partida) {
					//Guarda el vertice predecesor antes de retroceder en el camino
					$predecesorAux = $predecesor;
					//Retrocede en el camino
					$predecesor = $predecesores[$predecesor];
					//Guarda la arista entre predecesor y el vertice anterior
					$caminoMasCorto[$predecesor] = $predecesorAux;
				}
				//Invierte el camino para que empiece por el vertice partida
				return array_reverse($caminoMasCorto, true);
            } else {
                return null;
            }
        } else {
            return null;
        }
    }



    private function getVisitados(){
        $visitados = array();
        if (isset($this->vertices)) {
            foreach ($this->vertices as $id => $vertice) {
                $visitados[$id] = false;
            }
            return $visitados;
        } else {
            return null;
        }
    }

    /**
     * Retorna el vertice con la id especificada.
     */
    public function getVertice($id)
    {
        if (isset($this->vertices)) {
            return $this->vertices[$id];
        } else {
            return null;
        }
    }

    public function getVertices()
    {
        return $this->vertices;
    }

    public function setVertices($vertices)
    {
        $this->vertices = $vertices;
    }

    public function getAristas()
    {
        return $this->aristas;
    }

    public function setAristas($aristas)
    {
        $this->aristas = $aristas;
    }

    public function getDirigido()
    {
        return $this->dirigido;
    }

    public function setDirigido($dirigido)
    {
        $this->dirigido = $dirigido;
    }

    public function __toString()
    {
        if (isset($this->vertices)) {
            $grafoString = "";
            foreach ($this->vertices as $id => $vertice) {
                $grafoString .= "+ Vertice:<b>" . $id . "</b>|   Aristas:";
                if (isset($this->aristas[$id])) {
                    foreach ($this->aristas[$id] as $destino => $peso) {
                        $grafoString .= "<br>-   destino:" . $destino . ", peso:" . $peso;
                    }
                }
                $grafoString .= "<br><br>";
            }
            return $grafoString;
        } else {
            return "Grafo vacio";
        }
    }
}
?>