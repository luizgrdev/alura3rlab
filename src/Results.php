<?php

namespace Alura3rlab;

class Results implements \IteratorAggregate
{
    /** @var Result[] */
    private array $results;

    public function __construct()
    {
        $this->results = [];
    }

    public function add(Result $result)
    {
        $this->results[] = $result;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->results);
    }
}
