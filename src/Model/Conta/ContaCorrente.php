<?php

namespace Actions\Bank\Model\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float 
    {
        return 0.05;
    }

    public function transfere(float $valorTransf, Conta $contaDestino)
    {
        if($valorTransf > $this->saldo) {
            echo "Valor indisponível!";
            return;
        } 
        $this->sacar($valorTransf);
        $contaDestino->depositar($valorTransf);  
        echo "Transferência realizada com sucesso!"; 
    }
}