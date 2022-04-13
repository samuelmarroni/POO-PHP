<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorDeVideo, Medico, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Samuel Marroni',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$segundoFuncionario = new Medico(
    'Enrico',
    new CPF('987.654.321-01'),
    1500
);

$umDiretor = new Diretor(
    'Ana Laura',
    new CPF('123.456.789-11'),
    5000
);

$umEditor = new EditorDeVideo(
      'Paulo',
    new CPF('567.321.789-01'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($segundoFuncionario);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
