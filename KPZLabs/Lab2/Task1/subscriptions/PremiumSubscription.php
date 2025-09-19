<?php

namespace Task1\subscriptions;

class PremiumSubscription extends Subscription
{
    public function __construct()
    {
        $this->monthlyFee = 200;
        $this->minPeriod  = 1;
        $this->channels   = ['Усі канали', '4K', 'Спорт+', 'Кінотеатр'];
    }
}
