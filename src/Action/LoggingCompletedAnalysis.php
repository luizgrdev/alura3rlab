<?php

namespace Alura3rlab\Action;

use Alura3rlab\Analysis;

class LoggingCompletedAnalysis implements Action
{
    private string $logfile = 'storage/logs/analysis.log';
    private string $output;

    protected function setOutput(Analysis $analysis) : void
    {
        $time = date('d-m-Y h:i');
        $code = $analysis->getSample()->getCode();

        $this->output = "[$time] Análise da amostra $code concluída" . PHP_EOL;
    }

    protected function fileSave()
    {
        if (!$fp = fopen($this->logfile, 'a')) {
            echo "Erro ao abrir o ($this->logfile)";
            exit;
        }

        if (fwrite($fp, $this->output) === FALSE) {
            echo "Erro ao escrever no arquivo ($this->logfile)";
            exit;
        }

        fclose($fp);
    }

    public function execute(Analysis $analysis) : void
    {
        $this->setOutput($analysis);
        $this->fileSave();
    }
}