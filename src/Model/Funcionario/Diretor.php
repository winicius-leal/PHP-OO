<?php
namespace Alura\Banco\Model\Funcionario; //Alura\Banco é o namespace RAIZ
use Alura\Banco\Model\{CPF,Pessoa};
use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{

    //sobreescreve o metodo da classe pai abstrata

    public function calculaBonificacaoAnual():float 
    {
        //chama o metodo GET da classe pai
        return $this->recuperaSalario() * 2;
    }



    /*
    Estamos implementando uma interface com o metodo abaixo, dizendo que a classe Diretor é Autenticavel em um sistema de Login.

    Todas as classes que decidirem implementar uma interface precisam implementar todos os métodos nela definidos. 
    */
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}