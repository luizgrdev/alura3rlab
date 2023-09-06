<?php

namespace Alura3rlab;

use Alura3rlab\User\Customer;
use Alura3rlab\User\Technician;

class Sample
{
    private Packages $packages;
    private Customer $customer;
    private ?Sample $main;

    public function __construct() 
    {
        $this->code = $this->randCode();
        $this->packages = new Packages();
    }

    public function randCode() : int
    {
        return rand(100000000, 200000000);
    }

    public function getCode() : int
    {
        return $this->code;
    }

    public function getPackages() : Packages
    {
        return $this->packages;
    }

    public function addPackage(Package $package) : void
    {
        $this->packages->add($package);
    }

    public function getCustomer() : Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer) : void
    {
        $this->customer = $customer;
    }

    public function __clone()
    {
        $this->code = $this->randCode();
    }
}