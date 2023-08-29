<?php

namespace Alura3rlab\State;

use Alura3rlab\Analysis;

class Registered extends State
{
    public function getName() : string
    {
        return "Registrada";
    }
    
    public function process(Analysis $analysis) : void
    {
        $analysis->setState(new Processing());
    }

    public function cancel(Analysis $analysis) : void
    {
        $analysis->setState(new Canceled());
    }
}