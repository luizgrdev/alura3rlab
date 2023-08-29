<?php

namespace Alura3rlab;

use Alura3rlab\User\Customer;
use Alura3rlab\User\Technician;

class Sample
{
    private int $code;
    private Packages $packages;
    private Customer $customer;

    public function __construct(int $code) 
    {
        $this->code = $code;
        $this->packages = new Packages();
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
}