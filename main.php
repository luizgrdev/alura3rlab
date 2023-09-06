<?php

require_once 'vendor/autoload.php';

use Alura3rlab\Facade\AnalysisNutritionFacade;
use Alura3rlab\Package;

$packages = array_map(function ($packageName) {
    return new Package($packageName);
}, ["Minerais básico", "Adicional FDA", "KPS"]);

$facade = new AnalysisNutritionFacade(
    ['name' => 'Cliente Teste', 'email' => 'cliente@teste.com', 'phone' => '35984757623'],
    $packages
);

$facade->setCustomer();
$facade->setPackages();

$facade->setClones(5);

$facade->sendAnalysis();