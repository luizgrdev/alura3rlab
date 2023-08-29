<?php

namespace Alura3rlab\Analyzers;

use Alura3rlab\Analyzer;

class NIRS extends Analyzer
{
    protected array $parameters = [
        0 => [
            'name' => 'Proteína Bruta',
            'abbr' => 'PB',
        ],
        1 => [
            'name' => 'Fibra Bruta',
            'abbr' => 'FB',
        ],
    ];

    protected array $results = [
        0 => [
            'code' => 19999999,
            'abbr' => 'PB',
            'value' => 15.8,
            'unit' => '%MS',
        ],
        1 => [
            'code' => 19999999,
            'abbr' => 'FB',
            'value' => 12.6,
            'unit' => '%MS',
        ],
    ];

    public function getImportedFileToArray() : array
    {
        return $this->results;
    }
}