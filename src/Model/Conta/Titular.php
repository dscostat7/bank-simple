<?php

namespace Actions\Bank\Model\Conta;

use Actions\Bank\Model\Pessoa;
use Actions\Bank\Model\Cpf;
use Actions\Bank\Model\Endereco;

class Titular extends Pessoa
{
    private $endereco;


    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }
}