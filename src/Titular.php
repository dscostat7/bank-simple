<?php

class Titular 
{
    private $cpf;
    private $nome;
    private $endereco;


    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
        $this->endereco = $endereco;
    }

    public function recuperaCpf() : string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome() : string 
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 3) {
            echo "O Campo Nome precisa ter pelo menos 3 caracteres" . PHP_EOL;
            exit();
        } 
    }

    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }
}