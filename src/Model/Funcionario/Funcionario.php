<?php

namespace Actions\Bank\Model\Funcionario;

use Actions\Bank\Model\{ Pessoa, Cpf };

abstract class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;


    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo() : string 
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome) : void 
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void 
    {
        if ($valorAumento < 0 ) {
            echo "Valor do aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;

    }

    public function calculaBonificacao(): float 
    {
        return $this->salario * 0.1;
    }
}