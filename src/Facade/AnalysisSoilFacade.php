<?php

namespace Alura3rlab\Facade;

use Alura3rlab\Strategy\{Soil};

class AnalysisSoilFacade extends AnalysisFacade
{
    public function setStrategy() : void
    {
        $this->strategy = new Soil();
    }
}