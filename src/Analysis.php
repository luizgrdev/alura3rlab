<?php

namespace Alura3rlab;

use Alura3rlab\Strategy\Strategy;
use Alura3rlab\Analyze\{Drying, Calcule, Finish};
use Alura3rlab\State\{State, Registered};
use Alura3rlab\Results;

class Analysis
{
    private Sample $sample;
    private State $state;
    private Results $results;

    public function __construct(Sample $sample)
    {
        $this->sample = $sample;
        $this->results = new Results();
        $this->state = new Registered();
    }

    /* Gets and sets */

    public function getSample() : Sample
    {
        return $this->sample;
    }

    public function getState() : State
    {
        return $this->state;
    }

    public function getResults() : Results
    {
        return $this->results;
    }

    public function setSample(Sample $sample) : void
    {
        $this->sample = $sample;
    }

    public function setState(State $state) : void
    {
        $this->state = $state;
    }

    public function setResults(Results $results) : void
    {
        $this->results = $results;
    }

    public function addResults(Results $results) : void
    {
        foreach ($results as $result)
            $this->results->add($result);
    }

    /* Analyze */

    public function analyze(Strategy $strategy) : void
    {
        $this->state->process($this);

        $analyze = new Drying(
            new Calcule(
                new Finish()
            )
        );

        $analyze->process($strategy, $this);
    }

    /* Set state */

    public function finish() : void 
    {
        $this->state->finish($this);
    }

    public function cancel() : void 
    {
        $this->state->cancel($this);
    }
}
