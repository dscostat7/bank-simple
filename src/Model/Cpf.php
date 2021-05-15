<?php

namespace Model;

class Cpf
{
    private $numero;


    public function __construct(string $numero) 
    {
        $this->numero = $numero;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
}