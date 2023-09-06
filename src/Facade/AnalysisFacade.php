<?php

namespace Alura3rlab\Facade;

use Alura3rlab\Action\{NotifyCompletedAnalysis, LoggingCompletedAnalysis};
use Alura3rlab\Command\{SendAnalysis, SendAnalysisHandler};
use Alura3rlab\Report\{Report, ReportStdout, ReportFile};
use Alura3rlab\Notification\{EmailNotification, PhoneNotification};
use Alura3rlab\Strategy\{Strategy};
use Alura3rlab\User\Customer;
use Alura3rlab\{Samples, Sample, Packages};

abstract class AnalysisFacade
{
    private Sample $sample;
    private Samples $clones;
    private Customer $customer;
    private Packages $packages;
    public Strategy $strategy;
    private Report $report;

    public function __construct(array $sampleData, array $customerData, array $packages)
    {
        $this->sample = new Sample();

        $this->clones = new Samples();

        $this->customer = new Customer(
            $customerData['name'],
            $customerData['email'],
            $customerData['phone']
        );

        $this->packages = new Packages();
        foreach ($packages as $package)
            $this->packages->add($package);
        
        $this->setStrategy();
        $this->report = new ReportFile();
    }

    abstract public function setStrategy() : void;

    public function setCustomer() : void
    {
        $this->sample->setCustomer($this->customer);
    }

    public function setPackages() : void
    {
        foreach ($this->packages as $package)
            $this->sample->addPackage($package);
    }

    public function sendAnalysis() : void
    {
        $handler = new SendAnalysisHandler();

        $phoneNotification = new PhoneNotification($this->customer->getPhone());
        $handler->addAfterAction(new NotifyCompletedAnalysis($phoneNotification));

        $emailNotification = new EmailNotification($this->customer->getEmail());
        $handler->addAfterAction(new NotifyCompletedAnalysis($emailNotification));

        $handler->addAfterAction(new LoggingCompletedAnalysis());

        $sendAnalysis = new SendAnalysis($this->sample, $this->strategy, $this->report);
        $handler->execute($sendAnalysis);

        foreach ($this->clones as $clone) {
            $sendAnalysis = new SendAnalysis($clone, $this->strategy, $this->report);
            $handler->execute($sendAnalysis);
        }
    }

    public function getClones() : Samples
    {
        return $this->clones;
    }

    public function setClones(int $quantity) : void
    {
        for ($i = 0; $i < $quantity; $i++)
            $this->clones->add(clone $this->sample);
    }
}