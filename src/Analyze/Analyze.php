<?php

namespace Alura3rlab\Analyze;

use Alura3rlab\Strategy\Strategy;
use Alura3rlab\Analysis;

abstract class Analyze
{
    protected ?Analyze $nextStep;

    public function __construct(?Analyze $nextStep)
    {
        $this->nextStep = $nextStep;
    }

    abstract public function process(Strategy $strategy, Analysis $analysis) : ?Analyze;
}