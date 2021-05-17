<?php

require_once 'autoload.php';

use Actions\Bank\Service\ControladorDeBonificacoes;
use Actions\Bank\Model\{ Cpf, Funcionario };


$umFuncionario = new Funcionario('Diego Souza', new Cpf('123.456.789-10'), 'Desenvolvedor', 3000);

$func2 = new Funcionario('Danielly Americo', new Cpf('987.654.321-10'), 'Contadora', 5000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
//$controlador->adicionaBonificacaoDe($func2);

echo $controlador->recuperaTotal();