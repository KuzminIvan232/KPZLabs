<?php

namespace Task1\creators;

use Task1\subscriptions\DomesticSubscription;
use Task1\subscriptions\PremiumSubscription;

class MobileApp extends SubscriptionCreator
{
    public function createSubscription(string $type): \Task1\subscriptions\Subscription
    {
        return match ($type) {
            'domestic' => new DomesticSubscription(),
            'premium' => new PremiumSubscription(),
            default => throw new \Exception("Unknown subscription type")
        };
    }
}
