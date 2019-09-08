<?php

namespace Acme;

class PaymentManager
{
    protected $paymentMethod;

    public function __construct(PaymentMethodInterface $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function process(): void
    {
        $this->paymentMethod->processPayment();
        // ...
    }
}
