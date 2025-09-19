<?php

namespace Task1\subscriptions;

class DomesticSubscription extends Subscription
{
    public function __construct()
    {
        $this->monthlyFee = 100;
        $this->minPeriod  = 1;
        $this->channels   = ['Новини', 'Спорт', 'Розваги'];
    }
}