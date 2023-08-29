<?php

namespace Alura3rlab;

class Result
{
    private Parameter $parameter;
    private ?float $value;
    private ?string $unit;

    public function __construct(Parameter $parameter, ?float $value, ?string $unit = '')
    {
        $this->parameter = $parameter;
        $this->value = $value;
        $this->unit = $unit;
    }

    public function getParameter() : Parameter
    {
        return $this->parameter;
    }

    public function getValue() : ?float
    {
        return $this->value;
    }

    public function getUnit() : ?string
    {
        return $this->unit;
    }
}