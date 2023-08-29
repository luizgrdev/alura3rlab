<?php

namespace Alura3rlab\Action;

use Alura3rlab\Analysis;

interface Action
{
    public function execute(Analysis $analysis) : void;
}