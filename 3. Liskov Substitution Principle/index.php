<?php

// composer dumpautoload -o
require 'vendor/autoload.php';

use Acme\Driver;
use Acme\Vehicle\Astra;
use Acme\Vehicle\Beetle;

$car = new Astra();
$driver = new Driver($car);
$driver->go();
