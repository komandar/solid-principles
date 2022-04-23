<?php

declare(strict_types=1);

// composer dumpautoload -o
require 'vendor/autoload.php';

use Acme\ErrorHandler;
use Acme\Logger;

$logger = new Logger;
$errorHandler = new ErrorHandler($logger);

set_error_handler(function ($errno, $errstr, $errfile, $errline) use ($errorHandler) {
    return $errorHandler->error($errno, $errstr, $errfile, $errline);
});

set_exception_handler(function ($exception) use ($errorHandler) {
    return $errorHandler->exception($exception);
});
