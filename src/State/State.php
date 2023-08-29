<?php

namespace Alura3rlab\State;

use Alura3rlab\Analysis;

abstract class State
{
    public function process(Analysis $analysis)
    {
        throw new \DomainException('Esta análise não pode ser processada');
    }

    public function finish(Analysis $analysis)
    {
        throw new \DomainException('Esta análise não pode ser finalizada');
    }

    public function cancel(Analysis $analysis)
    {
        throw new \DomainException('Esta análise não pode ser cancelada');
    }
}