<?php


namespace Actions\Bank\Model\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel() 
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float 
    {
        return 500.0;
    }
}