<?php

namespace Alura3rlab\Facade;

use Alura3rlab\Strategy\{Nutrition};

class AnalysisNutritionFacade extends AnalysisFacade
{
    public function setStrategy() : void
    {
        $this->strategy = new Nutrition();
    }
}