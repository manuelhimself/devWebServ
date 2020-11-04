<?php
class ships {
    private $eslora;
    private $tipus;
    private $matricula;
    private $any;

    function __construct($eslora, $tipus, $matricula, $any){
        $this->eslora=$eslora;
        $this->tipus=$tipus;
        $this->matricula=$matricula;
        $this->any=$any;
    }

    function getEslora(){
        return $this->eslora;
    }

    function setEslora($eslora){
        $this->eslora=$eslora;
    }

    function getTipus(){
        return $this->tipus;
    }

    function setTipus($tipus){
        $this->tipus=$tipus;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function setMatricula($matricula){
        $this->matricula=$matricula;
    }

    function getAny(){
        return $this->any;
    }

    function setAny($any){
        $this->any=$any;
    }
}
