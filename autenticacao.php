<?php

require_once('autoload.php');

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Funcionario;
use Alura\Banco\Model\CPF;

$diretor = new Diretor("Paula", new CPF("601.429.131-33"), 1000);
$autenticador = new Autenticador();
$autenticador->login($diretor, "456451");
