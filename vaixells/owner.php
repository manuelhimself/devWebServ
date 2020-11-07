<?php

include 'ships.php';

class owner {
    private $nom;
    private $llicencia;
    private $vaixell;

    function __construct($nom, $llicencia, $vaixell){
        $this->nom=$nom;
        $this->llicencia=$llicencia;
        $this->vaixell=$vaixell;
    }

    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        $this->nom=$nom;
    }

    function getLlicencia(){
        return $this->llicencia;
    }

    function setLlicencia($llicencia){
        $this->llicencia=$llicencia;
    }

    function getVaixell(){
        return $this->vaixell;
    }

    function setVaixell($vaixell){
        $this->vaixell=$vaixell;
    }

    function __toString(){
        global $nom, $llicencia, $vaixell;
        echo "Nom: " . $nom . " Llicencia: " . $llicencia;
    }

}
?>