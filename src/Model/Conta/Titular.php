<?php

namespace Alura\Banco\Model\Conta; //Alura\Banco é o namespace RAIZ
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;
class Titular extends Pessoa
{
    
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf,$nome);   
        $this->endereco = $endereco;
    }

    public function RecuperaEndereco():Endereco{
        return $this->endereco;
    }
}
