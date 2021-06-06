<?php

namespace Alura\Banco\Model; //Alura\Banco é o namespace RAIZ 
use Alura\Banco\Model\CPF;

abstract class Pessoa{
	
	public string $nome;
	
	public CPF $cpf;

	public function __construct(CPF $cpf, string $nome){
		$this->validaNome($nome);
		$this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function recuperaNome():string{
		return $this->nome;
	}
	public function alteraNome(string $nome):void{
		$this->validaNome($nome);
		$this->nome = $nome;
	}
	public function recuperaCpf():string{
		return $this->cpf;
	}

	protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}

