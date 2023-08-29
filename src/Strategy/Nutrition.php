<?php

namespace Alura3rlab\Strategy;

use Alura3rlab\Analyzers\{Microwave, NIRS};
use Alura3rlab\Analysis;

class Nutrition implements Strategy
{
    public function getName() : string
    {
        return "Nutrição animal";
    }
    
    public function drying(Analysis $analysis) : void
    {
        $analyzer = new Microwave();
        $analysis->addResults($analyzer->getResults($analysis->getSample()));
    }

    public function calcule(Analysis $analysis) : void 
    {
        $analyzer = new NIRS();
        $analysis->addResults($analyzer->getResults($analysis->getSample()));
    }
}