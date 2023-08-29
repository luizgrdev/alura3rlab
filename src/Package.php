<?php

namespace Alura3rlab;

class Package
{
    private string $name;
    private Parameters $parameters;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->parameters = new Parameters();
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getParameters() : Parameters
    {
        return $this->parameters;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function addParameter(Parameter $parameter) : void
    {
        $this->parameters->add($parameter);
    }
}