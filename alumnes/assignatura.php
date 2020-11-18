<?php

class assignatura {
    private $nom;
    private $codi;
    private $alumnes;

    function __construct($nom, $codi){
        $this->nom=$nom;
        $this->codi=$codi;
        $this->alumnes=array();
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

    function comp($object1, $object2){
        return strcmp($object1->name, $object2->name);
    }

    function ordenar(){
        global $alumnes;
        $alumnesOrd = $alumnes;
        usort($alumnesOrd, "cmp");
        return $alumnesOrd;
    }


}
?>