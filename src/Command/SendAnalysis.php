<?php

namespace Alura3rlab\Command;

use Alura3rlab\Report\Report;
use Alura3rlab\Strategy\Strategy;
use Alura3rlab\Sample;

class SendAnalysis
{
    private Sample $sample;
    private Strategy $strategy;
    private Report $report;

    public function __construct(
            Sample $sample, 
            Strategy $strategy,
            Report $report
        )
    {
        $this->sample = $sample;
        $this->strategy = $strategy;
        $this->report = $report;
    }

    public function getSample() : Sample
    {
        return $this->sample;
    }

    public function getStrategy() : Strategy
    {
        return $this->strategy;
    }

    public function getReport() : Report
    {
        return $this->report;
    }
}