<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoas
 *
 * @author Killer
 */
abstract class Pessoas {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    
    public function ganharExp(){
        $this->setExperiencia($this->getExperiencia()+1);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getExperiencia() {
        return $this->experiencia;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
         if($sexo == "M" || $sexo == "m"){
            $this->sexo = "Masculino";
        }elseif($sexo == "F" || $sexo == "f"){
            $this->sexo = "Feminíno";
        }
    }
    
    function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
    
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->setSexo($sexo);
        $this->experiencia = 0;
    }




}
