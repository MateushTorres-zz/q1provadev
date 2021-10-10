<?php

class Funcionario{
    private $nome = '';

    public function __construct ($nome){
        $this->nome = $nome;
    }
    public function  getNome(){
        return $this->nome;
    }

}