<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$endereco = new Endereco("Ghotan City", "Bairro de Ghotan", "Rua três", "007");
$titularDiego = new Titular (new Cpf("066.055.077-99"), "Diego Souza", $endereco);
$primeiraConta = new Conta($titularDiego);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo '$' . $primeiraConta->recuperaSaldo() . PHP_EOL;

$outroEndereco = new Endereco("A", "B", "C", "1D");

new Conta(new Titular (new Cpf("987.654.321.98"), "Teste", $outroEndereco));

$titularVitor = new Titular (new Cpf("123.456.789-10"), "Vitor Souza", $endereco);
$segundaConta = new Conta($titularVitor);
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;

echo "O banco possui " . Conta::numeroDeContas() . " contas no total!" . PHP_EOL;