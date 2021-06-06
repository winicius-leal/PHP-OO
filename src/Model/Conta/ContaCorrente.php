<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Conta\Conta;

class ContaCorrente extends Conta {

	public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    /*
		Implementação obrigatoria do metodo abstrato da classe mãe "Conta"
    */
    public function percentualTarifa():float{
        return 0.05;
    }

}