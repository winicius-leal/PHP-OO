<?php

namespace Alura\Banco\Model\Conta;
use Alura\Banco\Model\Conta\Conta;

class ContaPoupanca extends Conta
{
	/*
		Sobrescrita do metodo saca da classe mae Conta
	*/
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
		Implementação obrigatoria do metodo abstrato da classe mãe "Conta"
    */    
    public function percentualTarifa():float{
        return 0.03;
    }
} 