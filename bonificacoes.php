<?php

require_once 'autoload.php';

use Actions\Bank\Service\ControladorDeBonificacoes;
use Actions\Bank\Model\Cpf;
use Actions\Bank\Model\Funcionario\{ Diretor, Gerente, Funcionario, Desenvolvedor, EditorVideo };


$umFuncionario = new Desenvolvedor('Diego Souza', new Cpf('123.456.789-10'), 3000);

$func2 = new Gerente('Danielly Americo', new Cpf('987.654.321-10'), 5000);

$umEditor = new EditorVideo('Marcos', new Cpf('123.456.987-78'), 1500);

$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($func2);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;