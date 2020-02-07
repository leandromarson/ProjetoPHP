<?php
require_once 'Pessoas.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Killer
 */
class Usuario extends Pessoas{
    private $login;
    private $totAssistido;
    
            
    function __construct($login, $nome, $idade, $sexo) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->setTotAssistido(0);
    }
    
    
    
    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido()+1);
        echo "<p>".$this->getNome()." viu mais um video!</p>";
    }
    
    function getLogin() {
        return $this->login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

    public function status(){
        echo "<p>USUÁRIO</p>";
        echo "<table><tr><td><p>Login: </p></td><td>".$this->getLogin()."</td></tr>";
        echo "<tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr>";
        echo "<tr><td><p>Total Assistido: </p></td><td>".$this->getTotAssistido()."</td></tr>";
        echo "<tr><td><p>Experiência: </p></td><td>".$this->getExperiencia()."</td></tr></table><br>";
        
    }

}
