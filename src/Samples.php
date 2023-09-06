<?php

namespace Alura3rlab;

class Samples implements \IteratorAggregate
{
    /** @var Sample[] */
    private array $samples;

    public function __construct()
    {
        $this->samples = [];
    }

    public function add(Sample $sample)
    {
        $this->samples[] = $sample;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->samples);
    }
}
