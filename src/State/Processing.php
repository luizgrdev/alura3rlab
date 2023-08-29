<?php

namespace Alura3rlab\State;

use Alura3rlab\Analysis;

class Processing extends State
{
    public function getName() : string
    {
        return "Processando";
    }
    
    public function finish(Analysis $analysis)
    {
        $analysis->state = new Finished();
    }

    public function cancel(Analysis $analysis)
    {
        $analysis->state = new Canceled();
    }
}