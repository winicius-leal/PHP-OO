<?php

require_once('autoload.php');

use Alura\Banco\Model\{CPF,Pessoa};
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Model\Funcionario\{Funcionario, Gerente,Diretor,Desenvolvedor};


$umGerente = new Gerente("Jorge", new CPF("001.429.131-33"), 1000);
$umDiretor = new Diretor("Paula", new CPF("601.429.131-33"), 1000);
$umDesenvolvedor = new Desenvolvedor("Denis", new CPF("601.429.131-33"), 1000);
//var_dump($umFuncionario);

$controlador = new ControladorDeBonificacao();


$controlador->adicionaBonificacaoDe($umGerente);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);

var_dump($controlador->recuperaTotal());

