<?php

declare(strict_types=1);

namespace AdityaDees\LaravelGoogleBard\Exceptions;

use Exception;

class ErrorException extends Exception
{
    public static function invalidToken(): self
    {
        return new self("__Secure-1PSID value must end with a single dot. Enter correct __Secure-1PSID value.");
    }

    public static function errorResponse(String $status): self
    {
        return new self("Response Status: " . $status);
    }

    public static function snimoeValueNotFound(): self
    {
        return new self("SNlM0e value not found in response. Check __Secure-1PSID value.");
    }
}
