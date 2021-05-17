<?php

namespace Actions\Bank\Model\Funcionario;

use Actions\Bank\Model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool 
    {
        if ($senha === '4321'){
            echo "Efetuado Login como GERENTE!!" . PHP_EOL;
        } else {
            echo "Senha incorreta!!" . PHP_EOL;
        }
        return $senha;
    }

}