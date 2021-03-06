<?php

use Actions\Bank\Model\AcessoPropriedades;

namespace Actions\Bank\Model;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected $nome;
    protected $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }


    public function recuperaNome() : string 
    {
        return $this->nome;
    }

    public function recuperaCpf() : string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 3) {
            echo "O Campo Nome precisa ter pelo menos 3 caracteres" . PHP_EOL;
            exit();
        } 
    }
}