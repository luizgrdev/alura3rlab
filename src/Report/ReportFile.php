<?php

namespace Alura3rlab\Report;

use Alura3rlab\Sample;
use Alura3rlab\Analysis;
use Alura3rlab\Strategy\Strategy;
use Alura3rlab\User\Customer;

class ReportFile implements Report
{
    private string $path;

    public function __construct(string $path = 'storage/reports')
    {
        $this->path = $path;
    }

    public function output(Sample $sample, Analysis $analysis, Strategy $strategy) : void
    {
        $content = "";

        $content .= "---------------------------------------------------" . PHP_EOL;
        $content .= PHP_EOL;
        $content .= "- Amostra" . PHP_EOL;
        $content .= PHP_EOL;

        $content .= "Código: {$sample->getCode()}" . PHP_EOL;
        $content .= "Cliente: {$sample->getCustomer()->getName()} ({$sample->getCustomer()->getAccessLevel()})" . PHP_EOL;
        $content .= PHP_EOL;

        $content .= "- Análise" . PHP_EOL;
        $content .= PHP_EOL;

        $content .= "Tipo: {$strategy->getName()}" . PHP_EOL;
        $content .= "Estado: {$analysis->getState()->getName()}" . PHP_EOL;
        $content .= PHP_EOL;

        $content .= "- Pacotes" . PHP_EOL;
        $content .= PHP_EOL;

        foreach ($sample->getPackages() as $package) 
            $content .= "{$package->getName()}" . PHP_EOL;
        $content .= PHP_EOL;

        $content .= "- Resultados" . PHP_EOL;
        $content .= PHP_EOL;

        foreach ($analysis->getResults() as $result)
        {
            $content .= "Parâmetro: {$result->getParameter()->getName()} ({$result->getParameter()->getAbbreviation()})" . PHP_EOL;
            $content .= "Resultado: {$result->getValue()} {$result->getUnit()}" . PHP_EOL;

            $content .= PHP_EOL;
        }

        $content .= "---------------------------------------------------" . PHP_EOL;

        $filename = $this->path . "/" . $sample->getCode() . ".txt";

        if (file_exists($filename)) unlink($filename);

        if (!$fp = fopen($filename, 'a')) {
            echo "Erro ao abrir o ($filename)";
            exit;
        }

        if (fwrite($fp, $content) === FALSE) {
            echo "Erro ao escrever no arquivo ($filename)";
            exit;
        }

        $time = date('d-m-Y h:i');
        echo "[$time] Sucesso, laudo salvo no arquivo ($filename)";

        fclose($fp);
    }
}