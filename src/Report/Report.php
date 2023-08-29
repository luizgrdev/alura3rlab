<?php

namespace Alura3rlab\Report;

use Alura3rlab\Sample;
use Alura3rlab\Analysis;
use Alura3rlab\Strategy\Strategy;
use Alura3rlab\User\Customer;

interface Report
{
    public function output(Sample $sample, Analysis $analysis, Strategy $strategy) : void;
}