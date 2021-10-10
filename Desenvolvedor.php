<?php

use Funcionario;

class Desenvolvedor extends Funcionario {
    private Carreira $carreira;

    public function __construct ($nome, $carreira){
        parent::__construct($nome);
        $this->carreira = $carreira;
    }

    public function getSalario(){
        return $this->carreira->getSalario();
    }
}