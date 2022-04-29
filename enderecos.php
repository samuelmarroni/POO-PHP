<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Marília', 'Bairro qualquer', 'Minha rua', '77S');
$outroEndereco = new Endereco('São Paulo', 'Centro', 'Alguma rua', '66');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
