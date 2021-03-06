<?php


namespace Notifier\Exceptions;


use Throwable;

class InvalidNotifierTypeException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}