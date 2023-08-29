<?php

namespace Alura3rlab\Strategy;

use Alura3rlab\Analysis;

interface Strategy
{
    public function drying(Analysis $analysis) : void;
    public function calcule(Analysis $analysis) : void;
    public function getName() : string;
}