<?php
namespace Alura\Banco\Model\Conta; //Alura\Banco é o namespace RAIZ

/*
Quando criamos uma classe abstrata, estamos indicando que ela ainda está incompleta, e são as classes que estendem dela que irão completá-la. É exatamente isso que a ContaPoupanca e a ContaCorrente estão fazendo. 
*/

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }


    public function saca(float $valorASacar): void
    {
        $tarifa = $valorASacar * $this->percentualTarifa();
        $valorASacar = $valorASacar + $tarifa;
        
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    /*
      A palavra "abstrata" quer dizer que o metodo ou classe ainda não esta pronta, pois é necessário que a classe que extende dela implemente o metodo abstrato obrigatoriamente para que funcione  
    */
    abstract protected function percentualTarifa():float;


    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }


    /*
        Metodos GETTERS e SETTERS
    */

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }


    
}
