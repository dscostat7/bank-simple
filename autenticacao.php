<?php

use Actions\Bank\Service\Autenticador;
use Actions\Bank\Model\Funcionario\Diretor;
use Actions\Bank\Model\Cpf;

require_once 'autoload.php';


$autenticador = new Autenticador();

$umDiretor = new Diretor('Teste Diretor', new Cpf('123.654.789-98'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');