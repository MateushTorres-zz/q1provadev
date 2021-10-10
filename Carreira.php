<?php
class Carreira {
    private $descricao = '';
    private $salario = 0;

    public function __construct ($descricao, $salario){
        $this->$descricao = $descricao;
        $this->$salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }
}