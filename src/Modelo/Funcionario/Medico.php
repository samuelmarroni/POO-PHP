<?php

namespace Alura\Banco\Modelo\Funcionario;

class Medico extends Funcionario
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario();
    }
}
