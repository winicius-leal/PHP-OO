<?php
namespace Alura\Banco\Model\Funcionario; //Alura\Banco é o namespace RAIZ
use Alura\Banco\Model\{CPF,Pessoa};

class Desenvolvedor extends Funcionario
{
    //sobreescreve o metodo da classe pai abstrata

    public function calculaBonificacaoAnual():float
    {

        return $this->recuperaSalario() * 0.05;
    }

    //alem disso ele pode adicionar novas funcionalidades extendendo da classe pai como a de subir de nivel ou hierarquia

    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}