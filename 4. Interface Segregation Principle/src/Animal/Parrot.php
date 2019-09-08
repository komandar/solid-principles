<?php

namespace Acme\Animal;

use Acme\BirdInterface;

class Parrot implements BirdInterface
{
    public function fly(): void
    {
        // ...
    }
}
