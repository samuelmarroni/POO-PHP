<?php

namespace Alura\Banco\Modelo\Funcionario;

class EditorDeVideo extends Funcionario
{
    public function calculaBonificacao():float
    {
        return 600;
    }
}