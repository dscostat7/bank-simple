<?php

namespace Modelo\Conta;

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