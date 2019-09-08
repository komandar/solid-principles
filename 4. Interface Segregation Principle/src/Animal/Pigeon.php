<?php

namespace Acme\Animal;

use Acme\BirdInterface;

class Pigeon implements BirdInterface
{
    public function fly(): void
    {
        // ...
    }
}
