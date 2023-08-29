<?php

namespace Alura3rlab;

class Parameter
{
    private string $name;
    private string $abbreviation;

    public function __construct(string $name, string $abbreviation)
    {
        $this->name = $name;
        $this->abbreviation = $abbreviation;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getAbbreviation() : string
    {
        return $this->abbreviation;
    }
}