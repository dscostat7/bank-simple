<?php

namespace Actions\Bank\Model;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}