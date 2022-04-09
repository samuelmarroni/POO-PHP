<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-10'),
        'Samuel Marroni',
        new Endereco('Marília', 'Bairro', 'Uma rua', '7')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
