<?php

namespace Alura3rlab\Analyze;

use Alura3rlab\Strategy\Strategy;
use Alura3rlab\Analysis;

class Drying extends Analyze
{
    public function process(Strategy $strategy, Analysis $analysis) : ?Analyze
    {
        $strategy->drying($analysis);

        return $this->nextStep->process($strategy, $analysis);
    }
}