<?php

namespace Task1\subscriptions;

class EducationalSubscription extends Subscription
{
    public function __construct()
    {
        $this->monthlyFee = 80;
        $this->minPeriod  = 3;
        $this->channels   = ['Наука', 'Документальні', 'Історія'];
    }
}