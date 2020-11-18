<?php
class alumne {
    private $nom;
    private $edat;
    private $dni;

    function __construct($nom, $edat, $dni){
        $this->nom=$nom;
        $this->edat=$edat;
        $this->dni=$dni;
    }

    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        $this->nom=$nom;
    }

    function getEdat(){
        return $this->edat;
    }

    function setEdat($edat){
        $this->edat=$edat;
    }

    function getDni(){
        return $this->dni;
    }

    function setDni($dni){
        $this->dni=$dni;
    }
    
    function __toString(){
        global $nom, $edat, $dni;
        echo "Nom: " . $nom . " Edat: " . $edat . " DNI: " . $dni;
    }

}
?>