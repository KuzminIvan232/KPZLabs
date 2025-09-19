<?php

namespace Task1\creators;

use Task1\subscriptions\Subscription;

abstract class SubscriptionCreator
{
    abstract public function createSubscription(string $type): Subscription;
}
