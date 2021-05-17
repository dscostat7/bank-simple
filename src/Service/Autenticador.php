<?php

namespace Actions\Bank\Service;

use Actions\Bank\Model\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void 
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Efetuado Login como DIRETOR!" . PHP_EOL;
        } else {
            echo "Senha incorreta!!" . PHP_EOL;
        }
    }
}