<?php

namespace Actions\Bank\Model\Funcionario;

class Diretor extends Funcionario
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool 
    {
        return $senha === '1234';
    }

}