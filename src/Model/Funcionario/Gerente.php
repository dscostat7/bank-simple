<?php

namespace Actions\Bank\Model\Funcionario;

class Gerente extends Funcionario
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario();
    }

}