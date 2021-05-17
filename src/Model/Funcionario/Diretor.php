<?php

namespace Actions\Bank\Model\Funcionario;

use Actions\Bank\Model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool 
    {
        if ($senha === '1234'){
            echo "Efetuado Login como DIRETOR!!" . PHP_EOL;
        } else {
            echo "Senha incorreta!!" . PHP_EOL;
        }
        return $senha;
    }

}