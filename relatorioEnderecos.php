<?php

use Alura\Banco\Model\Endereco;

/**
 * @property_read string $cidade;
*/

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'Minha rua',
    '71b'
);

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);

/*
USANDO METODOS MAGICOS: imprimir relatorio na sequencia: rua, numero, bairro e cidade
*/


/*
sem usar metodos magicos
*/
echo $umEndereco->getRua().$umEndereco->getNumero().$umEndereco->getBairro().$umEndereco->getCidade().PHP_EOL;
/*
usando metodo magico __toString()
*/
echo $umEndereco->__toString() .PHP_EOL;
echo $outroEndereco->__toString().PHP_EOL;
/*
usando metodo magico __get()
*/
echo $umEndereco->rua;
echo $umEndereco->numero;
echo $umEndereco->bairro;
echo $umEndereco->cidade;



