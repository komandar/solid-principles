<?php

namespace Acme\PaymentProvider;

use Acme\PaymentMethodInterface;

class PaypalIpn implements PaymentMethodInterface
{
    public function processPayment(): void
    {
        // process the payment with PayPal
    }
}
