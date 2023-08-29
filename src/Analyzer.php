<?php

namespace Alura3rlab;

use Alura3rlab\{Parameters, Parameter, Results, Result, Sample};

abstract class Analyzer
{
    public function getParameters() : Parameters
    {
        $parameters = new Parameters();

        foreach ($this->parameters as $parameter)
            $parameters->add(new Parameter($parameter['name'], $parameter['abbr']));

        return $parameters;
    }

    public function getResults(Sample $sample) : Results
    {
        $results = new Results();

        $importedResults = $this->getImportedFileToArray();

        $sampleResults = array_filter(
            $importedResults, 
            function ($sampleResult) use ($sample) {
                return $sampleResult['code'] == $sample->getCode();
            }
        );

        foreach ($sampleResults as $result) {
            if ($result['abbr']) {
                $parameter = array_reduce(
                    iterator_to_array($this->getParameters()),
                    function ($return, $param) use ($result) { 
                        if ($param->getAbbreviation() == $result['abbr'])
                            $return = $param;
                        return $return;
                    }
                );

                if ($parameter && isset($result['value']) && isset($result['unit']))
                    $results->add(new Result(
                        $parameter, 
                        $result['value'], 
                        $result['unit'])
                    );
            }
        }
        
        return $results;
    }

    abstract public function getImportedFileToArray() : array;
}