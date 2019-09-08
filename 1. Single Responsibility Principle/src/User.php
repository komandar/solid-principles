<?php

namespace Acme;

class User
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function create(): void
    {
        try {
            // save user to database
        } catch (Exception $e) {
            $this->logger->writeToFile($e->getMessage());
        }
    }
}
