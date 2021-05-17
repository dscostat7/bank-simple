<?php

require_once 'autoload.php';

use Actions\Bank\Service\ControladorDeBonificacoes;
use Actions\Bank\Model\Cpf;
use Actions\Bank\Model\Funcionario\{ Diretor, Gerente, Funcionario, Desenvolvedor };


$umFuncionario = new Desenvolvedor('Diego Souza', new Cpf('123.456.789-10'), 'Gerente de Projetos', 3000);

$func2 = new Gerente('Danielly Americo', new Cpf('987.654.321-10'), 'Contadora', 5000);

$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
// $controlador->adicionaBonificacaoDe($func2);

echo $controlador->recuperaTotal() . PHP_EOL;