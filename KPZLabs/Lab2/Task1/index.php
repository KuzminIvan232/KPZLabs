<?php
require_once __DIR__ . '/subscriptions/Subscription.php';
require_once __DIR__ . '/subscriptions/DomesticSubscription.php';
require_once __DIR__ . '/subscriptions/EducationalSubscription.php';
require_once __DIR__ . '/subscriptions/PremiumSubscription.php';
require_once __DIR__ . '/creators/SubscriptionCreator.php';
require_once __DIR__ . '/creators/WebSite.php';
require_once __DIR__ . '/creators/MobileApp.php';
require_once __DIR__ . '/creators/ManagerCall.php';

use Task1\creators\ManagerCall;
use Task1\creators\MobileApp;
use Task1\creators\WebSite;

$website = new WebSite();
$mobileApp = new MobileApp();
$managerCall = new ManagerCall();

$sub1 = $website->createSubscription('domestic');
$sub2 = $mobileApp->createSubscription('premium');
$sub3 = $managerCall->createSubscription('educational');

print_r($sub1->getInfo());
print_r($sub2->getInfo());
print_r($sub3->getInfo());