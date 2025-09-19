<?php

namespace Task1\subscriptions;

abstract class Subscription
{
    public $monthlyFee;
    public $minPeriod;
    public $channels;

    public function getInfo()
    {
        return [
            'monthlyFee' => $this->monthlyFee,
            'minPeriod'  => $this->minPeriod,
            'channels'   => $this->channels
        ];
    }
}