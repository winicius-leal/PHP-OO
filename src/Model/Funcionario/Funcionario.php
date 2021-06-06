<?php
namespace Alura\Banco\Model\Funcionario; //Alura\Banco é o namespace RAIZ
use Alura\Banco\Model\{CPF,Pessoa};
/*
Quando criamos uma classe abstrata, estamos indicando que ela ainda está incompleta, e são as classes que estendem dela que irão completá-la. É exatamente isso que a Gerente, Diretor e Desenvolvedor estão fazendo. 
*/
abstract class Funcionario extends Pessoa
{

    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome,$cpf);
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    /*
      A palavra "abstrata" quer dizer que o metodo ainda não esta pronta, pois é necessário que a classe que extende dela implemente o metodo abstrato obrigatoriamente para que funcione  
    */
    abstract protected function calculaBonificacaoAnual():float;




    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }
}