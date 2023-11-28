<?php

namespace PhpPact\Consumer\Exception;

use Exception;

class PactFileNotWroteException extends Exception
{
    public function __construct(int $code)
    {
        $message = match ($code) {
            1 => 'The function panicked.',
            2 => 'The pact file was not able to be written.',
            3 => 'The pact for the given handle was not found.',
            default => 'Unknown error',
        };
        parent::__construct($message, $code);
    }
}