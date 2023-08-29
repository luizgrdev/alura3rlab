<?php

namespace Alura3rlab\Action;

use Alura3rlab\Analysis;
use Alura3rlab\Notification\Notification;

class NotifyCompletedAnalysis implements Action
{
    private Notification $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function execute(Analysis $analysis) : void
    {
        $sampleCode = $analysis->getSample()->getCode();

        $this->notification->send(
            "Mensagem sobre sua amostra", 
            "A análise da sua amostra de código $sampleCode foi concluída!"
        );
    }
}