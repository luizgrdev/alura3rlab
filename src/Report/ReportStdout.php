<?php

namespace Alura3rlab\Report;

use Alura3rlab\Sample;
use Alura3rlab\Analysis;
use Alura3rlab\Strategy\Strategy;
use Alura3rlab\User\Customer;

class ReportStdout implements Report
{
    public function output(Sample $sample, Analysis $analysis, Strategy $strategy) : void
    {
        echo "---------------------------------------------------" . PHP_EOL;
        echo PHP_EOL;
        echo "- Amostra" . PHP_EOL;
        echo PHP_EOL;

        echo "Código: {$sample->getCode()}" . PHP_EOL;
        echo "Cliente: {$sample->getCustomer()->getName()} ({$sample->getCustomer()->getAccessLevel()})" . PHP_EOL;
        echo PHP_EOL;

        echo "- Análise" . PHP_EOL;
        echo PHP_EOL;

        echo "Tipo: {$strategy->getName()}" . PHP_EOL;
        echo "Estado: {$analysis->getState()->getName()}" . PHP_EOL;
        echo PHP_EOL;

        echo "- Pacotes" . PHP_EOL;
        echo PHP_EOL;

        foreach ($sample->getPackages() as $package) 
            echo "{$package->getName()}" . PHP_EOL;
        echo PHP_EOL;

        echo "- Resultados" . PHP_EOL;
        echo PHP_EOL;

        foreach ($analysis->getResults() as $result)
        {
            echo "Parâmetro: {$result->getParameter()->getName()} ({$result->getParameter()->getAbbreviation()})" . PHP_EOL;
            echo "Resultado: {$result->getValue()} {$result->getUnit()}" . PHP_EOL;

            echo PHP_EOL;
        }

        echo "---------------------------------------------------" . PHP_EOL;
    }
}