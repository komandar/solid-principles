<?php

namespace Acme;

interface PaymentMethodInterface
{
    public function processPayment();
}
