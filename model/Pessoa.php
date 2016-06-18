<?php


 
class Pessoa {
    
    private $rg;
    private $cpf;
    private $telefone;
    private $nome;
    
    function getRg() {
        return $this->rg;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNome() {
        return $this->nome;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


    
   
}
