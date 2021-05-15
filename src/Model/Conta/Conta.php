<?php

namespace Actions\Bank\Model\Conta;

class Conta 
{
    private $titular;
    private $saldo;
    private static $numeroContas = 0;
    /**
     * $tipo 1 = Conta Corrente; $tipo 2 = Conta Poupança;
     */
    protected $tipo;

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroContas++;      // Atributo da propria Classe;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function sacar(float $valorSacar)
    {
        if ($tipo === 1) {
            $tarifaSaque = $valorSacar * 0.05;
        } elseif ($tipo === 2) {
            $tarifaSaque = $valorSacar * 0.03;
        } else {
            echo "Por favor, informe o tipo de conta correto: 1 para Corrente e 2 para Poupança!" . PHP_EOL;
        }

        $valorSaque = $valorSacar + $tarifaSaque;
        if($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
        $this->saldo -= $valorSaque;   
    }


    public function depositar(float $valorDeposito) 
    {
        if($valorDeposito < 0) {
            echo "Você não pode depositar um valor negativo!";
            return;
        } 
        $this->saldo += $valorDeposito;    
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

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular() : string 
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular() : string 
    {
        return $this->titular->recuperaCpf();
    }


    public static function numeroDeContas(): int
    {
        return self::$numeroContas;
    }
}