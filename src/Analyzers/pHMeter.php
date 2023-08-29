<?php

namespace Alura3rlab\Analyzers;

use Alura3rlab\Analyzer;

class pHMeter extends Analyzer
{
    protected array $parameters = [
        0 => [
            'name' => 'pH',
            'abbr' => 'pH',
        ],
    ];

    protected array $results = [
        0 => [
            'code' => 19999999,
            'abbr' => 'pH',
            'value' => 4.5,
            'unit' => '',
        ],
    ];

    public function getImportedFileToArray() : array
    {
        return $this->results;
    }
}