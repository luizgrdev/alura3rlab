<?php

namespace Alura3rlab;

class Parameters implements \IteratorAggregate
{
    /** @var Parameter[] */
    private array $parameters;

    public function __construct()
    {
        $this->parameters = [];
    }

    public function add(Parameter $parameter)
    {
        $this->parameters[] = $parameter;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->parameters);
    }
}
