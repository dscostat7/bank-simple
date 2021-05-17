<?php

namespace Actions\Bank\Model\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario() * 0.01;
    }
}