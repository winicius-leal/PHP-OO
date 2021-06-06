<?php

namespace Alura\Banco\Model;

/*
Sobre Interface

Ela é um contrato onde quem assina se responsabiliza por implementar esses métodos (cumprir o contrato)

Todas as classes que decidirem implementar uma interface precisam implementar todos os métodos nela definidos.

*/

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}