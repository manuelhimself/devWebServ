<?php

class assignatura {
    private $nom;
    private $codi;
    private $alumnes;

    function __construct($nom, $codi, $alumnes){
        $this->nom=$nom;
        $this->codi=$codi;
        $this->alumnes=$alumnes;
    }

    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        $this->nom=$nom;
    }

    function getAlumnes(){
        return $this->alumnes;
    }

    function addAlumne($alumne){
        array_push($alumnes, $alumne);
    }

    function getCodi(){
        return $this->codi;
    }

    function setCodi($codi){
        $this->codi=$codi;
    }

    function ordenar(){
        global $alumnes;
        $alumnesOrd = $alumnes;
        function compare($object1, $object2){
        return strcmp($object1->getNom(), $object2->getNom());
        }
        usort($alumnesOrd, 'compare');
        return $alumnesOrd;
    }


}
?>