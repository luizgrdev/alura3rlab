<?php

namespace Alura3rlab\Analyze;

use Alura3rlab\Strategy\Strategy;
use Alura3rlab\Analysis;

class Calcule extends Analyze
{
    public function process(Strategy $strategy, Analysis $analysis) : ?Analyze
    {
        $strategy->calcule($analysis);

        return $this->nextStep->process($strategy, $analysis);
    }
}