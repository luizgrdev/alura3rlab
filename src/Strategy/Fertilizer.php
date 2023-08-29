<?php

namespace Alura3rlab\Strategy;

use Alura3rlab\Analyzers\{Microwave, ICP};
use Alura3rlab\Analysis;

class Fertilizer implements Strategy
{
    public function getName() : string
    {
        return "Fertilizantes";
    }

    public function drying(Analysis $analysis) : void
    {
        $analyzer = new Microwave();
        $analysis->addResults($analyzer->getResults($analysis->getSample()));
    }

    public function calcule(Analysis $analysis) : void
    {
        $analyzer = new ICP();
        $analysis->addResults($analyzer->getResults($analysis->getSample()));
    }
}