<?php

// composer dumpautoload -o
require 'vendor/autoload.php';

use Acme\Animal\Parrot;
use Acme\Animal\Penguin;
use Acme\Animal\Pigeon;

$bird = new Parrot;
$bird->fly();
