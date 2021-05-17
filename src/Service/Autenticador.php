<?php

namespace Actions\Bank\Service;

use Actions\Bank\Model\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void 
    {
        $autenticavel->podeAutenticar($senha);  
    }
}