<?php

use Actions\Bank\Model\{ Endereco, Cpf };
use Actions\Bank\Model\Conta\{ ContaPoupanca, Conta, ContaCorrente, Titular };

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Dani Diego',
        new Endereco('Tubarao', 'Humaita', 'Rua sete oito', '74')    
    )
);

$conta->depositar(1000);
$conta->sacar(500);
echo $conta->recuperaSaldo() . PHP_EOL;