<?php

declare(strict_types=1);

namespace Acme\PaymentProvider;

use Acme\PaymentMethodInterface;

class CreditCard implements PaymentMethodInterface
{
    public function processPayment(): void
    {
        // process the payment with CreditCard
    }
}
