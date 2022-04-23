<?php

declare(strict_types=1);

namespace Acme\Animal;

use Acme\BirdInterface;

class Parrot implements BirdInterface
{
    public function fly(): void
    {
        // ...
    }
}
