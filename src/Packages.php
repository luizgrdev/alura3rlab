<?php

namespace Alura3rlab;

class Packages implements \IteratorAggregate
{
    /** @var Package[] */
    private array $packages;

    public function __construct()
    {
        $this->packages = [];
    }

    public function add(Package $package)
    {
        $this->packages[] = $package;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->packages);
    }
}
