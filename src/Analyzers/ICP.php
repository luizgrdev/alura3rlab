<?php

namespace Alura3rlab\Analyzers;

use Alura3rlab\Analyzer;

class ICP extends Analyzer
{
    protected array $parameters = [
        0 => [
            'name' => 'Cálcio',
            'abbr' => 'Ca',
        ],
        1 => [
            'name' => 'Nitrogênio',
            'abbr' => 'N',
        ],
    ];

    protected array $results = [
        0 => [
            'code' => 19999999,
            'abbr' => 'Ca',
            'value' => 12.7,
            'unit' => '%MS',
        ],
        1 => [
            'code' => 19999999,
            'abbr' => 'N',
            'value' => 15.1,
            'unit' => '%MS',
        ],
    ];

    public function getImportedFileToArray() : array
    {
        return $this->results;
    }
}