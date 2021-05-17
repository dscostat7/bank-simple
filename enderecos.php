<?php

require_once 'autoload.php';

use Actions\Bank\Model\Endereco;

$umEndereco = new Endereco('Capivari de Baixo/SC', 'Centro', 'Av. Gen. Osv.', '174');
$outroEndereco = new Endereco('Tubarão/SC', 'Humaita', 'Rua Canadá', '1557');

echo $umEndereco . PHP_EOL;

echo $outroEndereco->cidade . PHP_EOL;
echo $outroEndereco->bairro . PHP_EOL;