<?php
namespace Alura\Banco\Service;
use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Model\Funcionario\Gerente;

class ControladorDeBonificacao
{
	private $totalBonificacoesFuncionarios = 0;


	/*
	polimorfismo, que estipula que uma referência pode ter vários tipos e se comportar de formas diferentes, mas existindo semelhanças o suficiente de modo a atender a alguns requisitos.
	*/
	
	public function adicionaBonificacaoDe(Funcionario $funcionario):void
	{
		$this->totalBonificacoesFuncionarios+=$funcionario->calculaBonificacaoAnual();
	}
	public function recuperaTotal(): float
    {
        return $this->totalBonificacoesFuncionarios;
    }

}