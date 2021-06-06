<?php
namespace Alura\Banco\Model\Funcionario; //Alura\Banco é o namespace RAIZ
use Alura\Banco\Model\{CPF,Pessoa};

class Gerente extends Funcionario implements Autenticavel
{
    //sobreescreve o metodo da classe pai abstrata

    public function calculaBonificacaoAnual():float
    {

        return $this->recuperaSalario() * 0.50;
    }

    /*
    Estamos implementando uma interface com o metodo abaixo, dizendo que a classe Diretor é Autenticavel em um sistema de Login.

    Todas as classes que decidirem implementar uma interface precisam implementar todos os métodos nela definidos. 
    */
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
