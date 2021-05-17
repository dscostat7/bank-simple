<?php

namespace Actions\Bank\Model\Funcionario;

use Actions\Bank\Model\Autenticavel;

class EditorVideo extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float 
    {
        return $this->recuperaSalario() * 0.01;
    }

    public function podeAutenticar(string $senha): bool 
    {
        if ($senha === 'edit1'){
            echo "Efetuado Login como EDITOR DE VIDEO!!" . PHP_EOL;
        } else {
            echo "Senha incorreta!!" . PHP_EOL;
        }
        return $senha;
    }
}