<?php

use Funcionario;

class Gerente extends Funcionario {
    private $salario = 0;

    public function __construct ($nome, $salario) {
        parent::__construct($nome);
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }
}