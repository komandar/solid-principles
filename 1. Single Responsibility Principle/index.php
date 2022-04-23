<?php

declare(strict_types=1);

// composer dumpautoload -o
require 'vendor/autoload.php';

use Acme\Logger;
use Acme\User;

$logger = new Logger();
$user = new User($logger);
$user->create();
