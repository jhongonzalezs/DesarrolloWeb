<?php
class Vertice{
    
    private $id;
    private $dato;

    public function __construct($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function __toString(){   
        return "id:" . $this->id;
    }
}
?>
