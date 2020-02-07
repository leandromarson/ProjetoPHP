<?php
require_once 'Usuario.php';
require_once 'Video.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Visualizacao
 *
 * @author Killer
 */
class Visualizacao {
    private $espectador;
    private $filme;
    
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->espectador->viuMaisUm();
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->ganharExp();
        echo "<p>".$this->espectador->getNome()." está vendo o video ".$this->filme->getTitulo()."</p>";
    }
    
    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }

    function avaliarLike(){
        echo "<p>".$this->espectador->getNome()." avaliou o video com like</p>";
        $this->filme->like();
    }
    function avaliarNota($nota){
        echo "<p>".$this->espectador->getNome()." avaliou o video com a nota: $nota</p>";
        $this->filme->setAvaliacao($nota);
    }
    function avaliarPorc($porc){
        echo "<p>".$this->espectador->getNome()." avaliou o video em $porc%";
        $tot=0;
        if($porc<=20){
            $tot=3;
        }else if($porc <=50){
            $tot=5;
        }else if($porc <=90){
            $tot=8;
        }else{
            $tot=10;
        }
        
        $this->filme->setAvaliacao($tot);
    }
    
    
    
    
    
}
