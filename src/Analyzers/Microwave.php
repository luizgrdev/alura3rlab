<?php

namespace Alura3rlab\Analyzers;

use Alura3rlab\Analyzer;

class Microwave extends Analyzer
{
    protected array $parameters = [
        0 => [
            'name' => 'Matéria Seca',
            'abbr' => 'MS',
        ],
    ];

    protected array $results = [
        0 => [
            'code' => 19999999,
            'abbr' => 'MS',
            'value' => 95.7,
            'unit' => '%',
        ],
    ];

    public function getImportedFileToArray() : array
    {
        return $this->results;
    }
}