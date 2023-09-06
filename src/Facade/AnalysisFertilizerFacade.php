<?php

namespace Alura3rlab\Facade;

use Alura3rlab\Strategy\{Fertilizer};

class AnalysisFertilizerFacade extends AnalysisFacade
{
    public function setStrategy() : void
    {
        $this->strategy = new Fertilizer();
    }
}