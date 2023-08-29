<?php

namespace Alura3rlab\Command;

use Alura3rlab\Analysis;
use Alura3rlab\Action\Action;

class SendAnalysisHandler
{
    private array $afterActions;

    public function __construct()
    {
        $this->afterActions = [];
    }

    public function addAfterAction(Action $action) : void
    {
        $this->afterActions[] = $action;
    }

    public function execute(SendAnalysis $sendForAnalysis) : void
    {
        $sample = $sendForAnalysis->getSample();
        $strategy = $sendForAnalysis->getStrategy();

        $analysis = new Analysis($sample);
        $analysis->analyze($strategy);

        foreach ($this->afterActions as $action)
            $action->execute($analysis);

        $sendForAnalysis->getReport()->output($sample, $analysis, $strategy);
    }
}