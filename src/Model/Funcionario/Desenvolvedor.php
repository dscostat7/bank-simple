<?php


namespace Actions\Bank\Model\Funcionario;

use Actions\Bank\Model\Autenticavel;

class Desenvolvedor extends Funcionario implements Autenticavel
{
    public function sobeDeNivel() 
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float 
    {
        return 500.0;
    }

    public function podeAutenticar(string $senha): bool 
    {
        if ($senha === 'q1w2e3'){
            echo "Efetuado Login como DESENVOLVEDOR!!" . PHP_EOL;
        } else {
            echo "Senha incorreta!!" . PHP_EOL;
        }
        return $senha;
    }
}