<?php

namespace Acme;

class Driver
{
    /** @var Car */
    protected $car;

    public function __construct(Car $car)
    {
        $this->car = new $car;
    }

    public function go(): void
    {
        $this->car->drive();
    }
}
