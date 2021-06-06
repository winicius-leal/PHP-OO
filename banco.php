<?php

require_once 'autoload.php';


use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Pessa;
use Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Conta\{ContaCorrente, Titular,ContaPoupanca,Conta};


$endereco = new Endereco("Goiania", "Centro", "GIl Lino", "434");


$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);

$primeiraConta = new ContaCorrente($vinicius);

$primeiraConta->deposita(500);
echo "Deposito realizado de: ".$primeiraConta->recuperaSaldo(). PHP_EOL;
$primeiraConta->saca(300); 
echo "Saque realizado, saldo atual de: ".$primeiraConta->recuperaSaldo(). PHP_EOL;


//echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
//echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$outroTitular = new Titular(new CPF('698.549.548-10'), 'Marcos', $endereco);
$segundaConta = new ContaPoupanca($outroTitular);


$outroEndereco = new Endereco("Teste", "teste", "teste", "teste");
$outra = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));

//unset($segundaConta);
echo "Total de contas criadas: ".Conta::recuperaNumeroDeContas();
