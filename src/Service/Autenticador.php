<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Autenticavel;

class Autenticador {
	
	public function login (Autenticavel $autenticavel, string $senha){
		if ($autenticavel->podeAutenticar($senha)) {
			echo"Login Efetuado com sucesso";
		}else{
			echo "Senha incorreta";
		}
	}
}