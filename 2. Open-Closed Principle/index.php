<?php

declare(strict_types=1);

// composer dumpautoload -o
require 'vendor/autoload.php';

use Acme\PaymentManager;
use Acme\PaymentProvider\CreditCard;
use Acme\PaymentProvider\PaypalIpn;

$paypalIpn = new PaypalIpn();
$creditCard = new CreditCard();

//$paymentManager = new PaymentManager($paypalIpn);
$paymentManager = new PaymentManager($creditCard);

$paymentManager->process();
