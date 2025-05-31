<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ProductosInsuficientesException extends Exception
{
    //
    public function __construct(
        $message = "No hay suficientes productos para hacer la cita",
        $code = 403,
        Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
