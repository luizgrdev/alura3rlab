<?php

namespace Alura3rlab\Analyze;

use Alura3rlab\Strategy\Strategy;
use Alura3rlab\Analysis;

class Finish extends Analyze
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function process(Strategy $strategy, Analysis $analysis) : ?Analyze
    {
        return null;
    }
}