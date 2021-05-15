<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoDoArquivo = str_replace('Actions\\Bank', 'src', $nomeCompletoDaClasse);
    $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
    $caminhoDoArquivo .= '.php';

    if (file_exists($caminhoDoArquivo)) {
        require_once $caminhoDoArquivo;
    }

});