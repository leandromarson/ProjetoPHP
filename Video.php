<?php
require_once 'AcoesVideo.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author Killer
 */
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 1;
        $this->curtidas = 0;
        $this->setReproduzindo(false);
        
    }

    
    function getTitulo() {
        return $this->titulo;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getViews() {
        return $this->views;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }

    function setViews($views) {
        $this->views = $views;
    }

    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }

    public function like() {
        $this->setCurtidas($this->getCurtidas()+1);
    }

    public function pause() {
        if($this->getReproduzindo()){
            $this->setReproduzindo(false);
            echo "<p>Video pausado ||</p>";
        }else{
            echo "<p>Já está pausado!</p>";
        }
    }

    public function play() {
        if(!$this->getReproduzindo()){
            $this->setReproduzindo(true);
            echo "<p>Play |></p>";
        }else{
            echo "<p>Já está rodando!</p>";
        }
    }
    
    public function status(){
        echo "<p>VIDEO</p>";
        echo "<table><tr><td><p>Título: </p></td><td>".$this->getTitulo()."</td></tr>";
        echo "<tr><td><p>Avaliação: </p></td><td>".$this->getAvaliacao()."</td></tr>";
        echo "<tr><td><p>Views: </p></td><td>".$this->getViews()."</td></tr>";
        echo "<tr><td><p>Curtidas: </p></td><td>".$this->getCurtidas()."</td></tr>";
        echo "<tr><td><p>Reproduzindo: </p></td><td>".($this->getReproduzindo()?"SIM":"NÃO")."</td></tr></table><br>";
    }

}
